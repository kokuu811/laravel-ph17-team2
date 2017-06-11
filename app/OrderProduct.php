<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{
	protected $fillable = ['quantity', 'price','order_id','shop_product_id'];
    public function order()
    {
    	return $this->belongsTo('App\Order');
    }
    public function shopProduct()
    {
    	return $this->belongsTo('App\ShopProduct');
    }
}