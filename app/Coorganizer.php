<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coorganizer extends Model
{
    protected $table = "coorganizers";
    protected $primaryKey = "idCoorganizers";

    public function event() {
        return $this->hasOne(Event::class , "idEvent");
    }
}
