<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event_contents extends Model
{
    protected $table = "event_contents";
    protected $primaryKey = 'id';
    // function events() {
    //     return $this->hasOne(events::class, 'id');
    // }
}
