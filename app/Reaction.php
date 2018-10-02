<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    //
    public function reaction()
    {
        return $this->belongsTo('App\Post');
    }

}
