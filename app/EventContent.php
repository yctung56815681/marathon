<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventContent extends Model
{
    protected $table = "event_contents";
    protected $primaryKey = 'idEventContent';

    // function no() {
    //     return $this->hasOne('', '', '');
    // }
}

