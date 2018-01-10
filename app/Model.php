<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    // Guarded is what fields are forbidden to send
    protected $guarded = [];
}
