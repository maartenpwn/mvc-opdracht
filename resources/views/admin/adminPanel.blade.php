@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

      <h1>Hello admin</h1>
      <p>You've got the power!</p>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Musclegroup</th>
            <th scope="col">Status</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>

        <tbody>

          @foreach ($exercises as $exercise)
            <tr>
              <td><a href="exercises/{{ $exercise->id }}" >{{ $exercise->title }}</a></td>
              <td>{{ $exercise->musclegroup }}</td>

              @if($exercise->active)
                <td>
                  <a href="toggle/{{ $exercise->id }}">
                    <i class="fa fa-toggle-on green" aria-hidden="true"></i>
                  </a>
                </td>
              @endif

              @if(!$exercise->active)
              <td>
                <a href="toggle/{{ $exercise->id }}">
                  <i class="fa fa-toggle-off grey" aria-hidden="true"></i>
                </a>
              </td>
              @endif

              <!-- <td><a href="exercises/{{ $exercise->id }}/delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td> -->
              <td>
                  <form action="exercises/{{ $exercise->id }}/delete" method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE">
                      <input class="btn btn-danger" type="submit" value="Delete">
                  </form>
              </td>

            </tr>
          @endforeach

        </tbody>
      </table>

    </div>
</div>

@endsection('content')
