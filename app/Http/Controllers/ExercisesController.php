<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;

class ExercisesController extends Controller
{

  public function index() {
    $exercises = Exercise::all();
    return view('exercises.index', compact('exercises'));
  }

  public function show(Exercise $exercise){
    return view('exercises.show', compact ('exercise'));
  }

  // Form
  public function create() {
    return view('exercises.create');
  }

  public function store() {
    // Validation
    $this->validate(request(), [
      'title' => 'required',
      'body'  => 'required'
    ]);

    // Creating the post
    Exercise::create(request([
      'title',
      'body'
    ]));

    // Redicrect after succes
    return redirect('/');
  }

}
