<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\CreateTasks;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request) {
        $task = new Task();
        $task->description = $request->description;
        $task->save();
        event(new CreateTasks($task));

        return redirect()->route('task.index');
    }
}
