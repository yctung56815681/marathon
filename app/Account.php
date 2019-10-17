<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = "accounts";
    protected $primaryKey = "id";

    // public function events() {
    //     return $this->hasMany(Event::class , "accountId");
    // }

    // public function order_groups() {
    //     return $this->hasMany(OrderGroup::class , "accountId");
    // }
}
