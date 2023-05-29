<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Lt;
use App\Models\Leave;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeaveController extends Controller
{
    public function manage(Request $request)
    {
        return view(
            'leaves.leave_manage',
            [
                'leaves' => Leave::all(),

            ]
        );
    }
    public function request(Request $request)
    {
        return view('leaves.leave_request', [
            'request' => Leave::all()->where('user_id', '=', auth()->user()->id),
            'lts' => Lt::all()->where('status', 1),
        ]);
    }

    public function create_lt(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required'
            ]);
            $lt = [
                'name' => $request->name
            ];

            Lt::create($lt);

            return back()->with('message', 'Leave type created successfully!');
        } catch (Exception $e) {
            dd($e);
            return back()->withErrors($e);
        }
    }
    public function store(Request $request)
    {
        $path = $request->file('leave_evidence')->store('public/evidences');
    }
}
