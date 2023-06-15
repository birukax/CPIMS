<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Lt;
use Carbon\Carbon;
use App\Models\Leave;
use Illuminate\Http\Request;
use App\services\LeaveService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class LeaveController extends Controller
{

    public function __construct(Request $request)
    {
    }
    public function manage(Request $request)
    {
        return view(
            'leaves.leave_manage',
            [
                'leaves' => Leave::all(),
                'lts' => Lt::all(),

            ]
        );
    }
    public function request(Request $request)
    {
        return view('leaves.leave_request', [
            'requests' => Leave::latest()->where('user_id', '=', auth()->user()->id)->get(),
            'lts' => Lt::all()->where('status', 1),
        ]);
    }

    public function show(string $id)
    {
        return view('leaves.leave_detail', [
            'leave' => Leave::find($id)
        ]);
    }

    public function store(Request $request, LeaveService $leaveService)
    {
        $pending = auth()->user()->leaves->where('status_id', '<=', 2);
        if (count($pending) === 0) {
            try {
                $leaveService->store($request);
                return back()->with('message', 'Leave Requested Successfully');
            } catch (Exception $e) {
                dd($e);
                return back()->withErrors($e);
            }
        } else {
            return back()->with('message', 'You have a pending leave request');
        }
    }

    public function decision(Request $request, LeaveService $leaveService, String $id)
    {
        try {

            $leaveService->decision($request, $id);
            return back()->with('message', 'Decision Made Successfully!');
        } catch (Exception $errors) {
            return back()->withErrors('errors', $errors);
        }
    }

    public function create_lt(Request $request)
    {

        try {
            $request->validate([
                'name' => ['required', 'unique:lts'],
                'days' => 'integer'
            ]);
            $lt = [
                'name' => $request->name,
                'days' => $request->days
            ];

            Lt::create($lt);

            return back()->with('message', 'Leave type created successfully!');
        } catch (Exception $e) {

            return Redirect::back()->withErrors(['msg' => 'The leave type already exists!']);
        }
    }
}
