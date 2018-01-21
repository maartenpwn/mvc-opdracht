@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

      <!--
      <form method="POST" action="{{ $exercise->id }}/like" class="pull-right">
          {{ csrf_field() }}

          <input class="btn btn-info" type="submit" value="like">
      </form>
      -->

      <h1>{{ $exercise->title }}</h1>
      <p>{{ $exercise->body }}</p>

      <h2>Comments</h2>

      @foreach ($exercise->comments as $comment)


        <!-- Start comment -->
        <div class="row comments">
            <div class="col-md-1 {{ Auth::check() && $comment->poster->id == Auth::user()->id ? "pull-right" : "" }}">
              <div class="thumbnail">
                <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
              </div>
            </div>

            <div class="col-md-5 {{ Auth::check() && $comment->poster->id == Auth::user()->id ? "pull-right" : "" }}">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <strong>{{ $comment->poster->name }}</strong> <span class="text-muted">commented {{ $comment->created_at }}</span>
                </div>
                <div class="panel-body">
                  {{ $comment->comment }}
                </div>
              </div>
            </div>
        </div>
        <!-- End comment -->
      @endforeach

      <h2>Create a comment</h2>

      @if(Auth::check())
        <form method="POST" action="{{ $exercise->id }}/comment/create">

          <!-- Generates a unique hidden token, for security reasons  -->
          {{ csrf_field() }}

          <div class="form-group">
            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" class="form-control"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- validation message -->
        @include ('layouts.errors')
      @else
        <p>Login to comment <a href="{{ route('login') }}">Login</a>
        <p>No account? click <a href="{{ route('register') }}">here</a> to register</p>
      @endif



    </div>
</div>

@endsection('content')
