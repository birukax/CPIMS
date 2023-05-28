<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Crime;
use Illuminate\Http\Request;
use App\Http\Requests\ReportCrimeRequest;

class CrimeController extends Controller
{

    public function index(Request $request)
    {
        return view(
            'crimes.crimes',
            [
                'crimes' => Crime::all(),
            ]
        );
    }
    public function create(Request $request)
    {
        return view('crimes.report_crime');
    }
    public function store(ReportCrimeRequest $request)
    {
        try {

            Crime::create($request->validated());

            return redirect('/crimes')->with('message', 'Crime reported successfully');
        } catch (Exception $e) {
            dd($e);
            return back()->withErrors($e);
        }
    }

    public function show(string $id)
    {
        return view('crimes.crime_detail', [
            'crime' => Crime::find($id)
        ]);
    }
}
