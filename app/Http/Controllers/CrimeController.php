<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Task;
use App\Models\Crime;
use Illuminate\Http\Request;
use App\Services\CrimeService;
use App\Http\Requests\ReportCrimeRequest;

class CrimeController extends Controller
{
    public function __construct(Request $request)
    {
    }
    public function index(Request $request)
    {
        return view(
            'crimes.crimes',
            [
                'crimes' => Crime::latest()->paginate(10),
            ]
        );
    }

    public function view(string $id)
    {
        return view('crimes.crime_detail', [
            'crime' => Crime::find($id)
        ]);
    }
    public function show(Request $request)
    {
        return view('crimes.report_crime');
    }

    public function store(Request $request, CrimeService $crimeService)
    {
        try {
            $crimeService->store($request);
            return back()->with('message', 'Crime Reported Successfully');
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }

    }

    public function decision(Request $request, String $id)
    {
        try {
            if (auth()->user()->role_id === 3) {
                $request->validate([
                    'status_id' => 'required',
                    'co_decision' => 'required',
                ]);
                $co_decision = [
                    'status_id' => $request->status_id,
                    'co_decision' => $request->co_decision

                ];

                Crime::find($id)->update($co_decision);
                return back()->with('message', 'Decision Made Successfully!');
            } elseif (auth()->user()->role_id === 5) {
                $request->validate([
                    'status_id' => 'required',
                    'dc_decision' => 'required',
                ]);
                $dc_decision = [
                    'status_id' => $request->status_id,
                    'dc_decision' => $request->dc_decision

                ];

                Crime::find($id)->update($dc_decision);
                return back()->with('message', 'Decision Made Successfully!');
            }
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }
    }


}
