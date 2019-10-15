@extends('layout')

@section('title')
Create Project
@endsection


@section('content')
<div class="content">
<h1>CREATE NEW PROJECT</h1>
</div>
<form method="POST" action="/projects">
    {{ csrf_field() }}
<div>
<input type="text" class="input {{ $errors->has('title') ? 'alert-danger' : '' }}" name="title" placeholder="Project title" value=" {{ old('title') }}" >
</div>
<div>
<textarea name="description" class="input {{ $errors->has('description') ? 'alert-danger' : '' }}" placeholder="Project description" ></textarea>
</div>
<div>
<button type="submit">Create Project</button>
</div>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif
</form>
@endsection


