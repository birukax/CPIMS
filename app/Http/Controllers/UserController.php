<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function attendance(Request $request)
    {
        return view('home',[

            'users' => User::all()->where('role', 'police'),
        ]
    );

    }
}
