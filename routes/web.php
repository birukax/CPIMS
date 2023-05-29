<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CrimeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\RuleController;
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

    Route::group(['prefix' => 'rules'], function () {
        Route::get('/', [RuleController::class, 'index']);
    });

    Route::group(['middleware' => 'CheckRole:sl',], function () {
        Route::get('/attendance/staff_entered/{id}', [AttendanceController::class, 'staff_entered']);
        Route::get('/attendance/staff_left/{id}', [AttendanceController::class, 'staff_left']);
        Route::group(['prefix' => 'crimes'], function () {
            Route::get('/report_crime', [CrimeController::class, 'create'])->name('report_crime');
            Route::post('/crime_reported', [CrimeController::class, 'store']);
        });
        Route::group(['prefix' => 'tasks'], function () {
            Route::get('/', [TaskController::class, 'index'])->name('tasks');
            Route::post('/task_created', [TaskController::class, 'store'])->name('task_created');
            Route::get('/task_detail/{id}', [TaskController::class, 'show'])->name('task_detail');
            Route::post('/{id}/police_assigned', [TaskController::class, 'assign_police'])->name('police_assigned');
            Route::delete('/task/remove_police/{task}/{user}', [TaskController::class, 'remove_user']);
        });
    });
    Route::group(['middleware' => 'CheckRole:co'], function () {

        Route::post('rules/create_rule', [RuleController::class, 'store'])->name('create_rule');
        Route::group(['prefix' => 'pcs'], function () {
            Route::get('/', [PcController::class, 'index']);
            Route::get('/edit_pc/{id}', [PcController::class, 'edit'])->name('edit_pc');
            Route::get('/register_pc', [PcController::class, 'create'])->name('register_pc');
            Route::post('/pc_registered', [PcController::class, 'store'])->name('pc_registered');
            Route::put('/pc_edited', [PcController::class, 'update'])->name('pc_edited');
        });
    });
    Route::group(['middleware' => 'CheckRole:admin'], function () {
        Route::group(['prefix' => 'users'], function () {
            Route::post('/register', [UserController::class, 'store'])->name('register');
            Route::get('/', [UserController::class, 'create'])->name('create_user');
            Route::get('/edit_user/{id}', [UserController::class, 'edit'])->name('edit_user');
            Route::put('/user_edited', [UserController::class, 'update'])->name('user_edited');
        });
    });

    Route::group(['middleware' => 'CheckRole:crime_manager'], function () {

        Route::group(['prefix' => 'crimes'], function () {
            Route::get('/', [CrimeController::class, 'index'])->name('crimes');
            Route::put('/crime_detail/co_decision/{id}', [CrimeController::class, 'decision']);
            Route::put('/crime_detail/dc_decision/{id}', [CrimeController::class, 'decision']);
            Route::get('/crime_detail/{id}', [CrimeController::class, 'show']);
            Route::post('/crime_reported', [CrimeController::class, 'store']);
        });
    });

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
});
