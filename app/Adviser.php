<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adviser extends Model
{
    public $incrementing = false;
    
    function students()
    {
        return $this->hasMany('App\Student');
    }
}