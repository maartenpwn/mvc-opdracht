@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

      <h2>Filter</h2>
      <ul>
        <li><a href="{{ url('/?filter=chest')}}">Chest</a></li>
        <li><a href="{{ url('/?filter=legs')}}">Legs</a></li>
      </ul>

      <h2>Exercises</h2>
      <ul>
        @foreach ($exercises as $exercise)
          <li>
            <a href="exercises/{{ $exercise->id }}" >{{ $exercise->title }}</a>
            <span>- {{ $exercise->musclegroup }}</span>
          </li>
        @endforeach
      </ul>
    </div>

    <a href="create">Add new exercise</a>
</div>

@endsection('content')
