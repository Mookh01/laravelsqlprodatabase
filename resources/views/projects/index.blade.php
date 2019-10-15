@extends('layout')

@section('title')
Project Index
@endsection


@section('content')
<div class="content">
<h1>INDEX</h1>
<ul>
@foreach ($projects as $project)
    <li>
    <a href="/projects/{{ $project->id }}">
    {{ $project->title }}
    </a>
    </li>
    @endforeach
</ul>
</div>
@endsection