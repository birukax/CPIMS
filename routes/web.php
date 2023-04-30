<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'attendance']);

Route::get('/crimes', function (){
    return view('crimes');
});

Route::get('/tasks', function (){
    return view('tasks');
});

Route::get('/leave_request', function (){
    return view('leave_request');
});
