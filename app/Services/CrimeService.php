<?php

namespace App\Services;

use Exception;
use App\Models\Lt;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Crime;
use App\Models\Leave;
use Illuminate\Http\Request;

class CrimeService
{


    public function store(Request $request)
    {
        $request->validate([
            'crime' => 'required',
            'description' => 'required',
            'offender_name' => 'required',
            'offender_id' => 'required',
            'offender_phone_number' => 'required',
            'offender_statement' => 'required',
        ]);
        if ($request->victim_statement) {
            $request->validate([
                'victim_statement' => 'required',
                'victim_name' => 'required',
                'victim_id' => 'required',
                'victim_phone_number' => 'required',
            ]);
            $crime = [
                'victim_statement' => $request->victim_statement,
                'victim_name' => $request->victim_name,
                'victim_id' => $request->victim_id,
                'victim_phone_number' => $request->victim_phone_number,
            ];
        }
        $crime = [
            'crime' => $request->crime,
            'description' => $request->description,
            'offender_name' => $request->offender_name,
            'offender_id' => $request->offender_id,
            'offender_statement' => $request->offender_statement,
            'offender_phone_number' => $request->offender_phone_number,
            'reported_by' => auth()->user()->id
        ];

        Crime::create($crime);
    }
}
