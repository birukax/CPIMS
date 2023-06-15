<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Emergency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EmergencyController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'emergency.emergency',
            [
                'emergencies' => Emergency::all(),

            ]
        );
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'emergency_name' => 'required',
                'emergency_contact_name' => 'required',
                'emergency_contact_phone' => 'required',
            ]);

            $emergency = [
                'emergency_name' => $request->emergency_name,
                'emergency_contact_name' => $request->emergency_contact_name,
                'emergency_contact_phone' => $request->emergency_contact_phone,
            ];

            if ($request->emergency_alternative_phone !== NULL && $request->emergency_alternative_name !== NULL) {
                $emergency = [
                    'emergency_name' => $request->emergency_name,
                    'emergency_contact_name' => $request->emergency_contact_name,
                    'emergency_contact_phone' => $request->emergency_contact_phone,
                    'emergency_alternative_name' => $request->emergency_alternative_name,
                    'emergency_alternative_phone' => $request->emergency_alternative_phone,
                ];
            }

            Emergency::create($emergency);
            return back()->with('message', 'Emergency Added Successfully!');
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'emergency_name' => 'required', 'unique',
                'emergency_contact_name' => 'required',
                'emergency_contact_phone' => 'required',
            ]);

            $emergency = [
                'emergency_name' => $request->emergency_name,
                'emergency_contact_name' => $request->emergency_contact_name,
                'emergency_contact_phone' => $request->emergency_contact_phone,
            ];

            if ($request->emergency_alternative_phone !== NULL && $request->emergency_alternative_name !== NULL) {
                $emergency = [
                    'emergency_name' => $request->emergency_name,
                    'emergency_contact_name' => $request->emergency_contact_name,
                    'emergency_contact_phone' => $request->emergency_contact_phone,
                    'emergency_alternative_name' => $request->emergency_alternative_name,
                    'emergency_alternative_phone' => $request->emergency_alternative_phone,
                ];
            }

            $editableEmergency = DB::table('emergencies')->where('id', '=', $request->id);

            $editableEmergency->update($emergency);
            return back()->with('message', 'Emergency Edited Successfully!');
        } catch (Exception $e) {
            dd($e);
        }
    }
}
