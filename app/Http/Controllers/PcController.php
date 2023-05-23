<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pc;
use Illuminate\Http\Request;

class PcController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'pcs.pcs',
            [
                'pcs' => Pc::all(),
            ]
        );
    }
}
