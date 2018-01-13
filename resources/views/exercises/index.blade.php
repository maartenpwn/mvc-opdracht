@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      <h1>Exercises</h1>

      <ul>
        @foreach ($exercises as $exercise)
          <li>
            <a href="exercises/{{ $exercise->id }}" >{{ $exercise->title }}</a>
          </li>
        @endforeach
      </ul>
    </div>

    <a href="create">Add new exercise</a>
</div>

@endsection('content')
