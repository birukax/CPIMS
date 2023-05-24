<?php

namespace App\Http\Controllers;

use Exception;
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

            Task::create($request->validated())->zones()->attach($request->zone_id);


            return redirect('/tasks')->with('message', 'Task Created successfully');
        } catch (Exception $e) {
            dd($e);
            return back()->withErrors($e);
        }
    }
}
