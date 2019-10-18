<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
    protected $table = "runs";
    protected $primaryKey = 'idRun';

    // function no() {
    //     return $this->hasOne('', '', '');
    // }
    public function event() {
        return $this->hasOne(Event::class , "idEvent");
    }
}

