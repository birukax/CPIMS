<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Task;
use App\Models\Zone;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTaskRequest;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'tasks.tasks',
            [
                'tasks' => Task::all(),
                'zones' => Zone::all(),
                'availables' => Attendance::all()->where('date', '=', Carbon::today()->toDateString()),
            ]
        );
    }

    public function show(string $id)
    {
        return view('tasks.task_detail', [
            'task' => Task::find($id),
            'zones' => Zone::all(),
            'availables' => Attendance::all()->where('date', '=', Carbon::today()->toDateString()),
            'no' => 0,
        ]);
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


    public function assign_police(Request $request, String $id)
    {
        try {
            Task::find($id)->users()->attach($request->user_id);
            return back()->with('message', 'Police assigned successfully!');
        } catch (Exception $e) {
            dd($e);
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
