<?php

namespace App;

class Comment extends Model
{
      public function exercise()
      {
          return $this->belongsTo('App\Exercise');
      }
      public function poster()
      {
          return $this->belongsTo('App\User', 'user_id');
      }
}
