<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CrimeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\TaskController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [UserController::class, 'index']);

    Route::group(['middleware' => 'CheckRole:sl',], function () {
        Route::get('/attendance/staff_entered/{id}', [AttendanceController::class, 'staff_entered']);
        Route::get('/attendance/staff_left/{id}', [AttendanceController::class, 'staff_left']);
        Route::group(['prefix' => 'crimes'], function () {
            Route::get('/', [CrimeController::class, 'index'])->name('crimes');
            Route::get('/report_crime', [CrimeController::class, 'create'])->name('crimes..report_crime');
            Route::get('/crime_detail/{id}', [CrimeController::class, 'crime_detail'])->name('crimes.crime_detail');
            Route::post('/crime_reported', [CrimeController::class, 'store']);
        });
        Route::group(['prefix' => 'tasks'], function () {
            Route::get('/', [TaskController::class, 'index'])->name('tasks');
            Route::post('/task_created', [TaskController::class, 'store'])->name('task_created');
        });
    });
    Route::group(['middleware' => 'CheckRole:co'], function () {
        Route::group(['prefix' => 'pcs'], function () {
            Route::get('/', [PcController::class, 'index']);
        });
    });
    Route::group(['middleware' => 'CheckRole:admin'], function () {
        Route::post('/users/register', [UserController::class, 'store'])->name('register');
        Route::get('/users/create_user', [UserController::class, 'create'])->name('create_user');
    });


    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
});
