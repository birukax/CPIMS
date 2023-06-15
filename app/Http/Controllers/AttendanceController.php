<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'attendances.attendances',
            [
                'polices' => User::where('role_id', 1)->orderBy("name", "asc")->paginate(7),
                'today' => Carbon::today()->toDateString()

            ]
        );
    }
    public function staff_entered(string $id)
    {
        $staff_exists = Attendance::all()->where('staff_id', '=', $id)
            ->where('date', '=', Carbon::today()->toDateString());
        try {
            if (
                count($staff_exists) !== 0
            ) {

                return redirect()->back()->withErrors('user already in campus!');
            } else {
                $staff_arrived = [
                    'staff_id' => $id,
                    'date' => Carbon::today()->toDateString(),
                    'entered' => Carbon::now()->toTimeString(),
                    'created_at' => carbon::now()
                ];
                Attendance::insert($staff_arrived);
                return back()->with('message', 'staff arrived!');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function staff_left(string $id)
    {

        $staff_exists = Attendance::all()->where('staff_id', $id)
        ->where('date', '=', Carbon::today()->toDateString())
            ->where('left', '!==', NULL);

        try {
            if (
                count($staff_exists) !== 0
            ) {

                return back()->with('message', 'staff is not in campus!');
            } else {
                Attendance::query()->where('staff_id', $id)
                    ->where('date', '=', Carbon::now()->toDateString())
                    ->update(['left' => Carbon::now()->toTimeString()]);
                return back()->with('message', 'Staff left!');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
