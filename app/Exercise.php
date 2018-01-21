<?php

namespace App;

class Exercise extends Model
{
    /**
    * Get the post that owns the comment.
    */
    public function comments()
    {
        return $this->hasMany('App\Comment', 'exercise_id');
    }

    public function likes()
    {
        return $this->hasMany('App\Like', 'exercise_id');
    }
}
