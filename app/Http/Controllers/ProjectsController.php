<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use App\Services\Twitter;


class ProjectsController extends Controller
{
    //these functions call on the e blade.php files
    public function index()
    {
        $projects = Project::all();
        //this is calling view/project/index.blade.php
        // dump($projects);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $projects = Project::all();
        //this is calling view/project/create.blade.php
        return view('projects.create', compact('projects'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => 'required'
        ]);
        Project::create($attributes);
        return redirect('/projects');
    }
    //1.
    // public function show(Filesystem $file)
    // {
    //     $twitter = app('twitter');
    //     // dump($project);
    //     dd($twitter);
    //     return view('projects.show', compact('project'));
    // }
    //2.
    public function show(Project $project, Twitter $twitter)
    {
        // dump($project);
        dd($twitter);
        return view('projects.show', compact('project'));
    }
    //3.
    //public function show(Project $project)
    // {
    //     //this is calling view/project/show.blade.php
    //     return view('projects.show', compact('project'));
    // }

    public function edit(Project $project)
    {
        //this is calling view/project/edit.blade.php
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }

}
