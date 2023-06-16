<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PcController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CrimeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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


Route::group(['middleware' => ['auth',  'Available']], function () {
    Route::get('/', [UserController::class, 'index']);

    Route::get('/tasks/task_detail/{id}', [TaskController::class, 'show'])->name('task_detail')->middleware('CheckRole:task_view');

    Route::group(['prefix' => 'rules'], function () {
        Route::get('/', [RuleController::class, 'index']);
    });
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [UserController::class, 'show']);
        Route::put('/profile_edited', [UserController::class, 'update_profile'])->name('profile_edited');
        Route::put('/password_changed', [UserController::class, 'change_password'])->name('password_changed');
    });

    Route::group(['middleware' => 'CheckRole:crime_manager'], function () {
        Route::group(['prefix' => 'crimes'], function () {
            Route::get('/', [CrimeController::class, 'index'])->name('crimes');
            Route::get('/report', [CrimeController::class, 'show'])->name('report');
            Route::post('/report_crime', [CrimeController::class, 'store'])->name('report_crime');
            Route::put('/crime_detail/co_decision/{id}', [CrimeController::class, 'decision']);
            Route::put('/crime_detail/dc_decision/{id}', [CrimeController::class, 'decision']);
            Route::get('/crime_detail/{id}', [CrimeController::class, 'view']);
        });
    });


    Route::group(['prefix' => 'leave'], function () {
        Route::get('/manage', [LeaveController::class, 'manage'])->middleware('CheckRole:leave_manager')->name('manage_leaves');
        Route::get('/leave_detail/{id}', [LeaveController::class, 'show'])->middleware('CheckRole:leave_manager');
        Route::get('/download_evidence/{path}', [LeaveController::class, 'download_evidence'])->middleware('CheckRole:leave_manager');
        Route::get('/request', [LeaveController::class, 'request'])->middleware('CheckRole:leave_request');
        Route::post('/request_leave', [LeaveController::class, 'store'])->middleware('CheckRole:leave_request')->name('request_leave');
        Route::post('/create_lt', [LeaveController::class, 'create_lt'])->middleware('CheckRole:admin')->name('create_lt');
        Route::put('/leave_detail/{id}/co_decision', [LeaveController::class, 'decision']);
        Route::put('/leave_detail/{id}/admin_decision', [LeaveController::class, 'decision']);
    });
    Route::group(['middleware' => 'CheckRole:sl'], function () {
        Route::post('/zone_created', [TaskController::class, 'create_zone'])->name('zone_created');
        Route::group(['prefix' => 'attendances'], function () {
            Route::get('/', [AttendanceController::class, 'index'])->name('attendances');
            Route::get('/staff_entered/{id}', [AttendanceController::class, 'staff_entered']);
            Route::get('/staff_left/{id}', [AttendanceController::class, 'staff_left']);
        });

        Route::group(['prefix' => 'crimes'], function () {
            Route::get('/report_crime', [CrimeController::class, 'show'])->name('report_crime');
            Route::post('/crime_reported', [CrimeController::class, 'store'])->name('crime_reported');
        });

        Route::group(['prefix' => 'tasks'], function () {
            Route::get('/', [TaskController::class, 'index'])->name('tasks');
            Route::post('/task_created', [TaskController::class, 'store'])->name('task_created');
            Route::post('/{id}/police_assigned', [TaskController::class, 'assign_police']);
            Route::delete('/task/remove_police/{task}/{user}', [TaskController::class, 'remove_user']);
        });
    });
    Route::group(['middleware' => 'CheckRole:co'], function () {
        Route::group(['prefix' => 'rules'], function () {
            Route::post('/create_rule', [RuleController::class, 'store'])->name('create_rule');
            Route::delete('/delete/{id}', [RuleController::class, 'destroy']);

        });

        Route::group(['prefix' => 'pcs'], function () {
            Route::get('/', [PcController::class, 'index'])->name('pcs');
            Route::get('/edit_pc/{id}', [PcController::class, 'edit'])->name('edit_pc');
            Route::get('/register_pc', [PcController::class, 'create'])->name('register_pc');
            Route::post('/pc_registered', [PcController::class, 'store'])->name('pc_registered');
            Route::put('/pc_edited', [PcController::class, 'update'])->name('pc_edited');
        });
        Route::group(['prefix' => 'emergency'], function () {
            Route::get('/', [EmergencyController::class, 'index'])->name('emergencies');
            Route::post('/emergency_added', [EmergencyController::class, 'store'])->name('emergency_added');
            Route::put('/emergency_edited', [EmergencyController::class, 'update'])->name('emergency_edited');
        });
    });
    Route::group(['middleware' => 'CheckRole:admin'], function () {
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', [UserController::class, 'users'])->name('users');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/register', [UserController::class, 'store'])->name('register');
            Route::get('/edit_user/{id}', [UserController::class, 'edit'])->name('edit_user');
            Route::put('/user_edited', [UserController::class, 'update'])->name('user_edited');
            Route::put('/user_password_changed', [UserController::class, 'user_password_changed'])->name('user_password_changed');

        });
    });


    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
});
