<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_Product extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function product(){
    	return $this->belongsTo('App\Product');
    }
    public function shop(){
    	return $this->belongsTo('App\Shop');
    }
    public function abuses(){
    	return $this->hasMany('App\Abuses');
    }
    public function return_items(){
    	return $this->hasMany('App\Return_Item');
    }
    public function order_products(){
    	return $this->hasMany('App\Order_Product');
    }
    public function reviews(){
    	return $this->hasMany('App\Review');
    }
}