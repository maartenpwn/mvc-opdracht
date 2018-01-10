@if (count($errors)) <!-- check if there is 1 or more error message -->
<div class="alert alert-danger" style="background-color: red">
  <ul>
    @foreach ($errors->all() as $error)
      <li> {{ $error }} </li>
    @endforeach
  </ul>
</div>
@endif
