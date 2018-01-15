<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;

class ExercisesController extends Controller
{

  public function index(Request $request) {
    if($request->has('filter')){
      $exercises = Exercise::all()->where('musclegroup', $request->get('filter'));
    }
    else {
      $exercises = Exercise::all();
    }

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
      'musclegroup' => 'required',
      'body'  => 'required'
    ]);

    // Creating the post
    Exercise::create(request([
      'title',
      'musclegroup',
      'body'
    ]));

    // Redicrect after succes
    return redirect('/');
  }

  public function delete(Exercise $exercise) {
    $exercise->delete();
    return redirect('/');
  }

}
