<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
    public $incrementing = false;
    
    function student()
    {
        return $this->belongsTo('App\Student');
    }
}