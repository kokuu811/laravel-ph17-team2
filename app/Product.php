<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function shop_products(){
    	return $this->hasMany('App\Shop_Product');
    }
    public function wishlist_items(){
    	return $this->hasMany('App\Wishlist_Item');
    }
    public function product_attribute_values(){
    	return $this->hasMany('App\Product_Attribute_Value');
    }
     public function product_images(){
    	return $this->hasMany('App\Product_Image');
    }
}