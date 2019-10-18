<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    protected $primaryKey = 'idEvent';

    // function event_contents() {
    //     return $this->hasOne( 'App\EventContent', 'id','cityId');
    // }
//    function runs() {
//         return $this->hasOne( 'App\Run', 'id','cityId');
//     }
    public function EventContent() {
        return $this->hasMany(Event::class , "eventId","idEvent");
    }
    public function Run() {
        return $this->hasMany(Run::class , "eventId","idEvent");
    }
}

