<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $table = "events";
    protected $primaryKey = 'idEvent';
    // function event_contents() {
    //     return $this->hasMany(event_contents::class, 'eventId');
    // }
}

