<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Crime;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{


    public function index(Request $request)
    {
        $userRole = auth()->user()->role_id;

        if ($userRole === 1) {
            return view('police.dashboard');
        } elseif ($userRole === 2) {
            return view(
                'sl.dashboard',
                [
                    'users' => User::all()->where('role_id', 1),

                    'count' => 0
                ]
            );
        } elseif ($userRole === 3) {
            return view('co.dashboard');
        } elseif ($userRole === 4) {
            return view(
                'admin.dashboard',
                [
                    'users' => User::all(),

                    'count' => 0
                ]
            );
        } elseif ($userRole === 5) {
            return view('dc.dashboard');
        }
    }

    public function edit(string $id)
    {
        return view('admin.edit_user', [
            'user' => User::find($id)
        ]);
    }

    public function create(Request $request)
    {
        return view('admin.create_user');
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
            'phone' => ['required'],
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
    }

    public function update(Request $request): RedirectResponse
    {
        $userEdit = User::find($request->id);
        $formFields = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required'],
            'role_id' => ['required'],
        ]);

        $userEdit->update($formFields);
        return redirect('/')->with('message', 'User edited successfully!');
    }
}
