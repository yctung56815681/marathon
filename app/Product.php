<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = "idProduct";

    public function order_details() {
        return $this->hasMany(OrderDetail::class , "idProduct");
    }
}
