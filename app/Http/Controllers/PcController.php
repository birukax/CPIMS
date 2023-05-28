<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pc;
use Carbon\Carbon;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PcController extends Controller
{
    public function index()
    {
        return view(
            'pcs.pcs',
            [
                'pcs' => Pc::all(),
                'count' => 0
            ]
        );
    }
    public function create(Request $request)
    {
        return view('pcs.register_pc');
    }
    public function edit(Request $request, string $id)
    {
        return view('pcs.edit_pc', [
            'pc' => Pc::find($id)
        ]);
    }


    public function store(Request $request)
    {
        try {

            $request->validate([
                'brand' => ['required'],
                'serial_number' => ['required'],
                'owner_name' => ['required'],
                'owner_id' => ['required'],
            ]);

            $pc = [
                'brand' => $request->brand,
                'serial_number' => $request->serial_number,
                'owner_name' => $request->owner_name,
                'owner_id' => $request->owner_id,
                'approved_by' => Auth()->user()->id,
            ];

            Pc::create($pc);


            return redirect('/pcs')->with('message', 'Pc registered successfully!');
        } catch (Exception $e) {
            return back()->withErrors($e);
        }
    }

    public function update(Request $request)
    {
        try {

            $request->validate([
                'brand' => ['required'],
                'serial_number' => ['required'],
                'owner_name' => ['required'],
                'owner_id' => ['required'],
            ]);

            $pc = [
                'brand' => $request->brand,
                'serial_number' => $request->serial_number,
                'owner_name' => $request->owner_name,
                'owner_id' => $request->owner_id,
            ];
            $editablePC = DB::table('pcs')->where('id', '=', $request->id);


            $editablePC->update($pc);


            return redirect('/pcs')->with('message', 'Pc edited successfully!');
        } catch (Exception $e) {
            return back()->withErrors($e);
        }
    }
}
