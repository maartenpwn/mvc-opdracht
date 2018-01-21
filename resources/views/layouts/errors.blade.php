@if (count($errors)) <!-- check if there is 1 or more error message -->

<h2>Woops.. an error!</h2>
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
      <li> {{ $error }} </li>
    @endforeach
  </ul>
</div>
@endif
