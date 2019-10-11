<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    protected $primaryKey = 'id';

    // function event_contents() {
    //     return $this->hasOne( 'App\EventContent', 'id','cityId');
    // }
   // function runs() {
    //     return $this->hasOne( 'App\Run', 'id','cityId');
    // }
}

