<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Task;
use App\Models\User;
use App\Models\Crime;
use App\Models\Leave;
use App\Models\Emergency;
use App\Models\Attendance;
use App\Models\Pc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{


    public function index(Request $request)
    {
        $userRole = auth()->user()->role_id;

        if ($userRole === 1) {
            return view(
                'police.dashboard',
                [
                    'assigned_tasks' => auth()->user()->tasks,
                    'assigned_tasks_today' => auth()->user()->tasks->where('date', '>', Carbon::yesterday()),
                    'emergencies' => Emergency::all(),
                ]
            );
        } elseif ($userRole === 2) {
            return view(
                'sl.dashboard',
                [
                    'polices' => User::where('role_id', 1)->orderBy("name", "asc")->paginate(7),
                    'tasks' => Task::all(),
                    'crimes' => Crime::all(),
                    'availables' => Attendance::all()->where('date', '=', Carbon::today()->toDateString()),
                    'final_decision' => Crime::all()->where('status_id', 3),
                    'todays_tasks' => Task::all()->where('date', '>=', Carbon::today()->toDateString()),
                    'emergencies' => Emergency::all(),
                    'status' => Attendance::all()->where('date', '=', Carbon::today()->toDateString()),
                    'count' => 0,
                ]
            );
        } elseif ($userRole === 3) {
            return view(
                'co.dashboard',
                [
                    'emergencies' => Emergency::all(),
                    'polices' => User::where('role_id', 1)->orderBy("name", "asc")->paginate(7),
                    'pcs' => Pc::all(),
                    'leaves' => Leave::all(),
                    'crimes' => Crime::all(),
                    'pending_crimes' => Crime::all()->where('status_id', 1),
                    'pending_leaves' => Leave::all()->where('status_id', 1),
                    'count' => 0,
                ]
            );
        } elseif ($userRole === 4) {
            return view(
                'admin.dashboard',
                [
                    'emergencies' => Emergency::all(),
                    'users' => User::all(),
                    'available_users' => User::all()->where('status', 1),
                    'polices' => User::all()->where('role_id', 1),
                    'sls' => User::all()->where('role_id', 2),
                    'cos' => User::all()->where('role_id', 3),
                    'admins' => User::all()->where('role_id', 4),
                    'dcs' => User::all()->where('role_id', 5),
                    'leaves' => Leave::all(),
                    'co_pending' => Leave::all()->where('status_id', 1),
                    'pending' => Leave::all()->where('status_id', 2),
                    'accepted_leaves' => Leave::all()->where('status_id', 3),
                    'rejected_leaves' => Leave::all()->where('status_id', '>', 3)
                ]
            );
        } elseif ($userRole === 5) {
            return view(
                'dc.dashboard',
                [
                    'emergencies' => Emergency::all(),
                    'pending_crimes' => Crime::all()->where('status_id', 2),
                    'crimes' => Crime::all(),

                ]
            );
        }
    }

    public function edit(string $id)
    {
        return view('admin.edit_user', [
            'user' => User::find($id),
        ]);
    }
    public function users(Request $request)
    {
        return view('admin.users', [
            'users' => User::paginate(7),
            'count' => 0,
        ]);
    }

    public function create(Request $request)
    {
        return view('admin.create_user');
    }
    public function show(Request $request)
    {
        return view('profile.edit');
    }
    public function store(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
                'password' => ['required', 'confirmed', Password::defaults()],
                'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
                'role_id' => ['required'],
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role_id' => $request->role_id,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('message', 'User created successfully!');
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }
    }

    public function update(Request $request): RedirectResponse
    {
        try {
            $userEdit = User::find($request->id);
            $formFields = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'phone' => ['required'],
                'status' => ['required',],
                'available_leave' => ['required',],
                'role_id' => ['required'],
            ]);

            $userEdit->update($formFields);
            return redirect('/')->with('message', 'User edited successfully!');
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }
    }
    public function update_profile(Request $request): RedirectResponse
    {
        try {
            $profileEdit = User::find(auth()->user()->id);
            $formFields = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'phone' => ['required'],
            ]);

            $profileEdit->update($formFields);
            return redirect('/')->with('message', 'profile updated successfully!');
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }
    }
    public function user_password_changed(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'new-password' => 'required|string|min:6|confirmed',
            ]);

            //Change Password
            $user = User::find($request->id);
            $user->password = bcrypt($request->get('new-password'));
            $user->save();


            return redirect()->back()->with("success", "Password changed successfully !");
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }
    }
    public function change_password(Request $request)
    {
        try {

        if (!(Hash::check($request->get('current-password'), auth()->user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($request->get('new-password'));
        $user->save();


        return redirect()->back()->with("success", "Password changed successfully !");
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }

    }
}
