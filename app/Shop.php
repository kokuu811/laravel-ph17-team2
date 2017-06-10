<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function new_images(){
    	return $this->hasMany('App\New_Image');
    }
    public function shop_products(){
    	return $this->hasMany('App\Shop_Product');
    }
    public function vouchers(){
    	return $this->hasMany('App\Voucher');
    }
}