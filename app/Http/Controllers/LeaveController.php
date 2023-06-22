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
        try {
            $pending = auth()->user()->leaves->where('status_id', '<=', 2);
            $accepted = auth()->user()->leaves->where('status_id', '<=', 3)->where('end_date', '>=', Carbon::today()->toDateString());
            if (count($pending) === 0) {
                if (count($accepted) === 0) {
                    $leaveService->store($request);
                    return back()->with('message', 'Leave Requested Successfully');
                } else {
                    return back()->with('erroe', 'You are on a leave!');
                }
            } else {
                return back()->with('message', 'You have a pending leave request');
            }
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }
    }


    public function decision(Request $request, LeaveService $leaveService, String $id)
    {
        try {

            $leaveService->decision($request, $id);
            return back()->with('message', 'Decision Made Successfully!');
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }
    }
    public function download_evidence(Request $request, String $path,)
    {
        return response()->download(storage_path($path));
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
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }
    }
}
