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
        } catch (Exception $e) {
            dd($e);
            return back()->withErrors($e);
        }
    }
}
