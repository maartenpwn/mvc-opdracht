@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

      <div class="col-md-4">
        <div id="filter" class="show-front">
          <img src="../resources/assets/img/human-front.jpg" class="human-front"/>
          <img src="../resources/assets/img/human-back.jpg" class="human-back"/>

          <a href="{{ url('/?filter=chest')}}" class="chest-area bodypart"></a>
          <a href="{{ url('/?filter=legs')}}" class="legs-area bodypart"></a>
          <a href="{{ url('/?filter=shoulders')}}" class="shoulders-area bodypart"></a>
          <a href="{{ url('/?filter=back')}}" class="back-area bodypart"></a>

          <a href="#" class="btn btn-primary rotate-button" role="button">Flip <i class="fa fa-repeat" aria-hidden="true"></i></a>
        </div>


      </div>

      <div class="col-md-8">
        <div class="row">
          <form method="GET" action="{{ url('/')}}">

          <div class="col-md-6">
            <div class="row">
              <div class="col-md-9">
                <div class="form-group">
                  <input type="text" class="form-control" id="search" name="search">
                </div>
              </div>
              <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Search <i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>

          <div class="col-md-6 text-right">
            <a href="{{ url('/?filter=')}}" class="btn btn-danger">Remove filter<i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="{{ url('/create')}}" class="btn btn-success">Add new exercise <i class="fa fa-plus" aria-hidden="true"></i></a>
          </div>

          </form>
        </div>

        <h2>Exercises</h2>

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" class="col-md-2">Title</th>
              <th scope="col" class="col-md-2">Musclegroup</th>
              <th scope="col" class="col-md-8">Description</th>
            </tr>
          </thead>

          <tbody>

            @foreach ($exercises as $exercise)
              <tr>
                <td class="col-md-2"><a href="exercises/{{ $exercise->id }}" >{{ $exercise->title }}</a></td>
                <td class="col-md-2">{{ $exercise->musclegroup }}</td>
                <td class="col-md-8 too-long">{{ $exercise->body }}</td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>

  </div>
</div>

@endsection('content')
