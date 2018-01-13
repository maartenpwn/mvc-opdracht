@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

      <h1>{{ $exercise->title }}</h1>

      <a href="{{ $exercise->id }}/delete">Delete</a>

    </div>
</div>

@endsection('content')
