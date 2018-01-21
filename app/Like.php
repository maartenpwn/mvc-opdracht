<?php

namespace App;

class Like extends Model
{
      public function exercise()
      {
          return $this->belongsTo('App\Exercise');
      }
      public function liker()
      {
          return $this->belongsTo('App\User', 'user_id');
      }
}
