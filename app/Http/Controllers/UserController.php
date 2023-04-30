<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function attendance(Request $request)
    {
        return view('attendance',[

            'users' => User::all()->where('role', 'police'),
            'count' => 0
        ]
    );

    }
}
