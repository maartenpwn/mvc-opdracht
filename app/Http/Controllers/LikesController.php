<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exercise;
use App\Like;

class LikesController extends Controller
{

  public function like(Exercise $exercise) {
    dd('Not implemented yet');
    // $user_id = Auth::id();
    // $exercise_id = $exercise->id;
    // $likes = count($exercise['likes']);
    //
    // // Validation
    // $this->validate(request(), [
    //   // 'comment' => 'required'
    // ]);
    //
    // // Creating the post
    // $like = new Like;
    //
    // $like->like_count = $likes;
    // $like->dislike_count = 0;
    // $like->user_id = $user_id;
    // $like->exercise_id = $exercise_id;
    //
    // // save it to the database
    // $like->save();
    //
    // // Redicrect after succes
    // return redirect()->back();
  }
}
