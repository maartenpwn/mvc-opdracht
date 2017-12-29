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

}
