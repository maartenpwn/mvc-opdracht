<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Exercise;

class CommentsController extends Controller
{

  public function store(Exercise $exercise) {

    $user_id = Auth::id();
    $exercise_id = $exercise->id;

    // Validation
    $this->validate(request(), [
      'comment' => 'required'
    ]);

    // Creating the post
    $comment = new Comment;

    $comment->comment = request('comment');
    $comment->user_id = $user_id;
    $comment->exercise_id = $exercise_id;

    // save it to the database
    $comment->save();

    // Redicrect after succes
    return redirect()->back();
  }
}
