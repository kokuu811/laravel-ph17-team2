<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{
    public function order(){
    	return $this->belongsTo('App\Order');
    }
    public function shop_product(){
    	return $this->belongsTo('App\Shop_Product');
    }
}