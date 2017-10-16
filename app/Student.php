<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $incrementing = false;
    
    public function locker()
    {
        // FIXME 3
        return $this->hasOne('App\Locker');
    }

    public function adviser()
    {
        // FIXME 4
        return $this->belongsTo('App\Adviser');
    }
}