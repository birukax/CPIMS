<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'leaves.leaves',
            [
                //   'leaves' => Leave::all(),

            ]
        );
    }
}
