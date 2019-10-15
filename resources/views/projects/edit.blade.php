@extends('layout')

@section('title')
Edit Project
@endsection

@section('content')
<div class="content">
<h1>EDIT PROJECT</h1>
</div>
<form method="POST" class="content" action="/projects/{{$project->id }}">
    @method('PATCH')
    @csrf
    <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}" required>
        </div>
    <div>

    <div class="field">
    <label class="label" for="description">Description</label>

        <div class="control">
            <textarea name="description" clas="textarea" required>{{ $project->description }}</textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Update Project</button>

        </div>
    </div>
</form>


<form  method="POST" class="content" action="/projects/{{$project->id }}">
    @method('DELETE')
    @csrf
    <div class="content">
        <div class="control">
            <button type="submit" class="button is-link">Delete Project</button>
        </div>
    </div>
</form>
@endsection