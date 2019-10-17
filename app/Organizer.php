<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    protected $table = "organizers";
    protected $primaryKey = "idOrganizers";

    public function event() {
        return $this->hasOne(Event::class , "idEvent");
    }
}
