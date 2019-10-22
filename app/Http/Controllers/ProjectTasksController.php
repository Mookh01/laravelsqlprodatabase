<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    //
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);
        return back();
    }

    public function update(Task $task)
    {
        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method();
        return back();
    }

    // public function store(Project $project)
    // {
    //    //1.
    //     Task::create([
    //         'project_id' => $project->id,
    //         'description' => request('description')
    //     ]);
    //     return back();

    //     //2.
    //     $project->addTask(request('description'));
    //     return back();

    //     //3. 
    //     $attributes = request()->validate(['description' => 'required']);
    //     $project->addTask($attributes);
    //     return back();
    // }

   // public function update(Task $task)
    //{
        //1.
        //dd($task);
        //dd(request()->all());

        //2. 
        //$task->update([
         //   'completed' => request()->has('completed')
        //]);
        //return back();

        //3. 
        // $task->complete(request()->has('completed'));
        // $task->update([
        //     'completed' => request()->has('completed')
        // ]);

        //4.
        // $method = request()->has('completed') ? 'complete' : 'incomplete';
        // $task->$method();
        // return back();

   // }
}
