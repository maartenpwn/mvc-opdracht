<h1>create a post</h1>

<div class="row">

  <!-- <form method="POST" action="tasks"> -->
  <form method="POST" action="{{ url('/home')}}">
    <!-- Generates a unique hidden token, for security reasons  -->
    {{ csrf_field() }}

    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" id="title" name="title">
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
