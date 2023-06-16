<?php

namespace App\Services;

use file;
use App\Models\Lt;
use App\Models\User;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
        if ($request->leave_days === NULL) {
            $end_date = $startDate->addDays($leaveTypeDay);
            $leave_days = $leaveTypeDay;
        } else {
            $leave_days = $request->leave_days;
            $end_date = $startDate->addDays($leave_days);
        }
        if ($request->evidence) {
            $evidence_name = time() . $request->file('evidence')->getClientOriginalName();
            $evidence_path = $request->file('evidence')->storeAs('evidences', $evidence_name, 'public');
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
            'evidence' => $evidence_name,
            'evidence_path' => '/storage/' . $evidence_path,
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
