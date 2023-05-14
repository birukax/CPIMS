<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{



    public function attendance(Request $request)
    {
        return view(
            'attendance',
            [

                'users' => User::all()->where('role', 'police'),

                'count' => 0
            ]
        );
    }

    public function staff_entered(User $staff)
    {
        $staff_exists = Attendance::all()->where('staff_id', $staff->id)
            ->where('date', '=', Carbon::now()->toDateString());
        try {
            if (
                count($staff_exists) !== 0
            ) {

                return redirect('/not_null');
            } else {
                $staff_arrived = [
                    'staff_id' => $staff->id,
                    'date' => Carbon::now()->toDateString(),
                    'entered' => Carbon::now()->toTimeString(),
                    'created_at' => carbon::now()
                ];
                Attendance::insert($staff_arrived);
                return redirect('/')->with('success', 'arrived');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function staff_left(User $staff)
    {
        $staff_exists = Attendance::all()->where('staff_id', $staff->id)
            ->where('date', '=', Carbon::now()->toDateString())
            ->where('left', '!=', NULL);

        try {
            if (
                count($staff_exists) !== 0
            ) {

                return redirect('/not_null');
            } else {
                Attendance::query()->where('staff_id', $staff->id)
                    ->where('date', '=', Carbon::now()->toDateString())
                    ->update(['left' => Carbon::now()->toTimeString()]);
                return redirect('/')->with('success', 'arrived');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
