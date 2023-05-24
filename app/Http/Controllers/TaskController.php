<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Task;
use App\Models\Zone;
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
            ]
        );
    }

    public function store(CreateTaskRequest $request)
    {
        try {

            // dd($request);

            $task = [
                'task_name' => $request->task_name,
                'task_description' => $request->task_description,
                'date' => Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d'),
                'starting_time' => $request->starting_time,
                'ending_time' => $request->ending_time,
            ];

            Task::create($task)->zones()->attach($request->zone_id);


            return redirect('/tasks')->with('message', 'Task Created successfully');
        } catch (Exception $e) {
            dd($e);
            return back()->withErrors($e);
        }
    }
}
