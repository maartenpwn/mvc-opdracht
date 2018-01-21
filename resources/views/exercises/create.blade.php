@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>create a post</h1>

        <form method="POST" action="{{ url('/create/exercise')}}">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>

          <div class="form-group">
            <label for="musclegroup">musclegroup</label>
            <select class="form-control" id="musclegroup" name="musclegroup">
              <option>chest</option>
              <option>back</option>
              <option>shoulders</option>
              <option>legs</option>
            </select>
          </div>

          <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" class="form-control"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- validation message -->
        @include ('layouts.errors')

      </div>
</div>

</div>

@endsection('content')
