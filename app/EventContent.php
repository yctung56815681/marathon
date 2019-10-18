<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventContent extends Model
{
    protected $table = "event_contents";
    protected $primaryKey = 'idEventContent';

    public function event() {
        return $this->hasOne(Event::class , "idEvent");
    }
}

