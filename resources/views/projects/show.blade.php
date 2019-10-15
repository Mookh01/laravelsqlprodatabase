@extends('layout')

@section('title')
{{ $project->title }}
@endsection


@section('content')
<div class="content">
<h2 class="">{{ $project->title }} </h2>
    <div>{{ $project->description }}</div>

        @if ($project->tasks->count())
            <div>
                @foreach ($project->tasks as $task)
                <div>
                    <form method="POST" action="">
                        @method('PATH')
                        @csrf
                        <label class="checkbox" for="completed"></label>
                        <input type="checkbox" name="completed">
                        {{$task->description}}
                    </form>
                </div>
                @endforeach
            </div>
        @endif

    <button><a href="/projects/{{$project->id }}/edit">Edit</a></button>
</div>
@endsection