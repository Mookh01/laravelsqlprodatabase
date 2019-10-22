@extends('layout')

@section('title')
{{ $project->title }}
@endsection


@section('content')
<div class="content">

<h2 class="">{{ $project->title }} </h2>

    <div>{{ $project->description }}</div>
    <button><a href="/projects/{{ $project->id }}/edit">Edit</a></button>
        
    <!-- count returns the number of items in a collection -->
        @if ($project->tasks->count())
            <div>
                @foreach ($project->tasks as $task)
                    <div>
                        <form method="POST" action="/tasks/{{ $task->id }}" >
                            @method('PATCH')
                            @csrf
                            
                            <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed" >
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}} >
                            {{ $task->description }}
                            </label>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif




    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box"  >
        @csrf
        <div class="field">
            <label class="label" for="description" >New Task</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task">
            </div>
        </div>

        <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>

        @include('validation')
    </form>
</div>
@endsection