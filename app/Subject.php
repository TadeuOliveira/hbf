<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $guarded = [];

    public function reviews()
    {
      return $this->hasMany('App\Review');
    }
}
