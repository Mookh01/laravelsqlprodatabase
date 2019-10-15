@extends('layout')

@section('title')
Welcome
@endsection
@section('content')
        <div class="content">
        <h1> {{ $foo }} WELCOME</h1>
        </div>
    <ul>
        @foreach($tasks as $task)
        <li><?= $task; ?></li>
    @endforeach
</ul>
@endsection
