<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Exercise;
use App\Comment;
// use App\Like;


class ExercisesController extends Controller
{

  public function index(Request $request) {

    // Filter
    if($request->filter){
      $exercises = Exercise::all()
        ->where('musclegroup', $request->get('filter'))
        ->where('active', 1);
    }

    else {
      $exercises = Exercise::all()->where('active', 1);
    }

    // Search
    if($request->has('search')){
      $exercises = Exercise::
        where('musclegroup', 'like', '%' . $request->get('search') . '%')->
        orwhere('title', 'like', '%' . $request->get('search') . '%')->
      get();

      // search - no result
      if ($exercises->isEmpty()) {
        dd('This exercise doesnt exist');
      }
    }

    return view('exercises.index', compact('exercises'));
  }

  public function show(Exercise $exercise){
    // Eager loading
    $exercise = Exercise::with('comments.poster', 'likes.liker')->where('id', $exercise->id)->get();
    $exercise = $exercise[0];

    return view('exercises.show', compact ('exercise'));
  }

  // Form
  public function create() {
    return view('exercises.create');
  }

  public function store() {

    // Logged in user
    $user_id = Auth::id();

    // Validation
    $this->validate(request(), [
      'title' => 'required',
      'body'  => 'required',
      'musclegroup' => 'required'
    ]);

    // Creating the post
    $exercise = new Exercise;

    $exercise->title = request('title');
    $exercise->body = request('body');
    $exercise->musclegroup = request('musclegroup');
    $exercise->active = 1;
    $exercise->user_id = $user_id;

    // save it to the database
    $exercise->save();

    // Redicrect after succes
    return redirect('/');
  }

  public function delete(Exercise $exercise) {
      $exercise->delete();
      return redirect()->back();
  }

  public function toggle(Exercise $exercise) {
    if($exercise->user_id == Auth::user()->id || Auth::user()->admin) {
      if ($exercise->active) {
        $exercise->update([
          'active' => 0
        ]);

        return redirect()->back();
      }

      else if (!$exercise->active){
        $exercise->update([
          'active' => 1
        ]);

        return redirect()->back();
      }
    }
  }

}
