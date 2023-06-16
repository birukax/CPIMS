<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuleController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'rules.rules',
            [
                'rules' => Rule::all(),
                'police_rule' => Rule::all()->where('role_id', 1),
                'shift_leader_rule' => Rule::all()->where('role_id', 2),
            ]
        );
    }

    public function store(Request $request)
    {
        try {

            $request->validate([
                'rule' => 'required',
                'role_id' => 'required',
            ]);
            $ruleData = [
                'rule' => $request->rule,
                'role_id' => $request->role_id
            ];
            Rule::create($ruleData);
            return redirect('/rules')->with('message', 'Rule created successfully');
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }

    }
    public function destroy(String $id)
    {
        try {
            Rule::find($id)->delete();
            return back()->with('message', 'Rule deleted successfully!');
        } catch (Exception $errors) {

            return back()->withErrors($errors->getMessage());
        }
    }
}
