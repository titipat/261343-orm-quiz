<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $incrementing = false;
    
    public function locker()
    {
        return $this->belongsTo('App\Locker');
    }

    public function adviser()
    {
        return $this->belongsTo('App\Adviser');
    }
}