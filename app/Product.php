<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['buys', 'name','description','images','view','price','category_id','alias'];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function shopProducts()
    {
    	return $this->hasMany('App\ShopProduct');
    }
    public function wishlistItems()
    {
    	return $this->hasMany('App\WishlistItem');
    }
    public function productAttributeValues()
    {
    	return $this->hasMany('App\ProductAttributeValue');
    }
     public function productImages()
    {
    	return $this->hasMany('App\ProductImage');
    }
}