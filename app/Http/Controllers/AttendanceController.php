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
                return redirect('/')->with('message', 'staff arrived!');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function staff_left(string $id)
    {
        $staff_exists = Attendance::all()->where('staff_id', $id)
            ->where('date', '=', Carbon::now()->toDateString())
            ->where('left', '!=', NULL);

        try {
            if (
                count($staff_exists) !== 0
            ) {

                return redirect('/not_null');
            } else {
                Attendance::query()->where('staff_id', $id)
                    ->where('date', '=', Carbon::now()->toDateString())
                    ->update(['left' => Carbon::now()->toTimeString()]);
                return redirect('/')->with('message', 'Staf left!');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
