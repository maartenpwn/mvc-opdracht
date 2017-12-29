<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    // // optie 1
    // public static function inComplete() {
    //   // static verwijst hier naar de task model
    //   return static::where('completed', 0)->get();
    // }

    // public function scopeIncomplete($query)
    // {
    //    return $query->where('completed', 0);
    // }


}
