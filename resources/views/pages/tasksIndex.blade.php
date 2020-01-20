@extends('layouts.base')

@section('content')
  <ul>
    @foreach ($tasks as $task)
      <li>
          <p>Task name: {{ $task->name }}</p>
          <p>Related Employee: {{ $task-> employee -> name }} {{ $task-> employee -> lastname }}</p>
      </li>
    @endforeach
  </ul>

@endsection