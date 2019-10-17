<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_details";
    protected $primaryKey = "idOrderDetail";

    public function order() {
        return $this->hasOne(Order::class , "idOrder");
    }

    public function product() {
        return $this->hasOne(Product::class , "idProduct");
    }
}
