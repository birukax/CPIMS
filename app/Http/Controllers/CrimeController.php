<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrimeController extends Controller
{
    public function report_crime(Request $request){
        return view('crimes.report_crime');
    }
}
