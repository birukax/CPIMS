<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Task;
use App\Models\Zone;
use App\Models\Attendance;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTaskRequest;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'tasks.tasks',
            [
                'tasks' => Task::orderBy('date', 'desc')->paginate(5),
                'zones' => Zone::all(),
                'availables' => Attendance::all()->where('date', '=', Carbon::today()->toDateString()),
            ]
        );
    }

    public function show(string $id)
    {
        if (auth()->user()->role_id === 2)
        return view('tasks.task_detail', [
            'task' => Task::find($id),
            'zones' => Zone::all(),
            'availables' => Attendance::all()->where('date', '=', Carbon::today()->toDateString()),
            'no' => 0,
        ]);
        elseif (auth()->user()->role_id === 1) {
            return view('police.police_tasks.task_detail', [
                'task' => Task::find($id),
                'zones' => Zone::all(),
                'availables' => Attendance::all()->where('date', '=', Carbon::today()->toDateString()),
                'no' => 0,
            ]);
        }
    }

    public function store(CreateTaskRequest $request)
    {
        try {
            // dd($request);
            $task = [
                'task_name' => $request->task_name,
                'task_description' => $request->task_description,
                'date' => Carbon::today()->toDateString(),
                'starting_time' => $request->starting_time,
                'ending_time' => $request->ending_time,
            ];

            Task::create($task)->zones()->attach($request->zone_id);


            return redirect('/tasks')->with('message', 'Task created successfully!');
        } catch (Exception $e) {
            dd($e);
            return back()->withErrors($e);
        }
    }

    public function create_zone(Request $request)
    {
        try {

            // dd($request);
            $zone = $request->validate([
                'name' => ['required', 'unique:zones,name'],
                'slug' => Str::slug($request->name),
            ]);

            Zone::create($zone);


            return redirect('/tasks')->with('message', 'Zone created successfully!');
        } catch (Exception $errors) {
            return back();
        }
    }


    public function assign_police(Request $request, String $id)
    {
        try {
            $task = Task::find($id);
            if ($task->ending_time < Carbon::now()->toTimeString()) {
                return back()->with('message', 'Task Expired!');
            }
            $task->users()->attach($request->user_id);
            return back()->with('message', 'Police assigned successfully!');
        } catch (Exception $e) {
            return back()->with('errors', 'Something went wrong!');
        }
    }

    public function remove_user(String $task, String $user)
    {
        try {
            Task::find($task)->users()->detach($user);
            return back()->with('message', 'Police Removed successfully!');
        } catch (Exception $e) {
            dd($e);
        }
    }
}
