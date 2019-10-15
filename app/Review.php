<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $guarded = [];

    public function subject()
    {
      return $this->belongsTo('App\Subject');
    }

    public function author()
    {
      return $this->belongsTo('App\User','user_id');
    }

}
