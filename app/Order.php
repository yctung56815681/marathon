<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $primaryKey = "idOrder";

    public function order_group() {
        return $this->hasOne(OrderGroup::class , "idOrderGroup","idOrder");
    }

    public function member() {
        return $this->hasOne(Member::class , "idMember","memberId");
    }

    public function run() {
        return $this->hasOne(Run::class , "idRun","idOrder");
    }

    public function order_details() {
        return $this->hasMany(OrderDetail::class , "idOrderDetail","idOrder");
    }
}