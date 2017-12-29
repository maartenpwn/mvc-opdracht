<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mvc-opdracht</title>
  </head>
  <body>
    <h1>Exercises</h1>

    <ul>
      @foreach ($exercises as $exercise)
        <li>
          <a href="exercises/{{ $exercise->id }}" >{{ $exercise->title }}</a>
        </li>
      @endforeach
    </ul>

  </body>
</html>
