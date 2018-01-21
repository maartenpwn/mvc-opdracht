@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>Welkom, {{ Auth::user()->name }} - Your posts</h1>

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


                @if(Auth::check() and $exercise->user_id == Auth::user()->id)
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

                @endif
              </tr>
            @endforeach

          </tbody>
        </table>

    </div>
</div>

</div>

@endsection('content')
