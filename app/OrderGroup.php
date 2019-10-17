<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderGroup extends Model
{
    protected $table = "order_groups";
    protected $primaryKey = "idOrderGroup";

    // public function account() {
    //     return $this->hasOne(Account::class , "id");
    // }

    public function event() {
        return $this->hasOne(Event::class , "idEvent","idOrderGroup");
    }

    public function orders() {
        return $this->hasMany(Order::class , "orderGroupId","idOrderGroup");
    }
}
