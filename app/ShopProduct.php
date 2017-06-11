<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_Product extends Model
{
    protected $fillable = ['quantity', 'price','discount','user_id','product_id','buys','shop_id'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
    public function shop()
    {
    	return $this->belongsTo('App\Shop');
    }
    public function abuses()
    {
    	return $this->hasMany('App\Abuses');
    }
    public function returnItems()
    {
    	return $this->hasMany('App\ReturnItem');
    }
    public function orderProducts()
    {
    	return $this->hasMany('App\OrderProduct');
    }
    public function reviews()
    {
    	return $this->hasMany('App\Review');
    }
}