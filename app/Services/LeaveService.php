<?php

namespace App\Services;

use Exception;
use App\Models\Lt;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveService
{



    public function store(Request $request)
    {

        $leaveTypeDay = Lt::find($request->lt_id)->leave_days;
        $request->validate([
            'reason' => 'required',
            'lt_id' => 'required',
        ]);

        $startDate = Carbon::parse($request->start_date);
        $start_date = $startDate->format('Y-m-d');
        // dd($request);
        if ($request->leave_days === NULL) {
            $end_date = $startDate->addDays($leaveTypeDay);
            $leave_days = $leaveTypeDay;
        } else {
            $leave_days = $request->leave_days;
            $end_date = $startDate->addDays($leave_days);
        }



        if (auth()->user()->role_id === 3) {
            $status_id = 2;
        } else {
            $status_id = 1;
        }

        $leaveRequest = [
            'user_id' => auth()->user()->id,
            'reason' => $request->reason,
            'leave_days' => $leave_days,
            'lt_id' => $request->lt_id,
            'status_id' => $status_id,
            // 'evidence' => $evidence_name,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        Leave::create($leaveRequest);
    }

    public function decision(Request $request, String $id)
    {
        $user = auth()->user();
        $leave = Leave::find($id);
        if ($user->role_id === 3) {
            $request->validate([
                'status_id' => 'required',
                'co_decision' => 'required',
            ]);
            $co_decision = [
                'status_id' => $request->status_id,
                'co_decision' => $request->co_decision
            ];

            $leave->update($co_decision);
            return back()->with('message', 'Decision Made Successfully!');
        } elseif ($user->role_id === 4) {
            $request->validate([
                'status_id' => 'required',
                'admin_decision' => 'required',
            ]);

            $admin_decision = [
                'status_id' => $request->status_id,
                'admin_decision' => $request->admin_decision

            ];
            if ($leave->lt->name === 'permanent' || 'Permanent') {
                if ($request->status_id === '3') {
                    User::find($leave->user->id)->update(['status' => 0]);
                }
            }
            if ($request->status_id === '3') {
                if (!in_array($leave->lt->name, ['emergency', 'Emergency', 'permanent', 'Permanent'])) {

                    User::find($leave->user->id)->decrement('available_leave',  $leave->leave_days);
                }
            }

            $leave->update($admin_decision);
        }
    }
}
