<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function wishlist_items(){
    	return $this->hasMany('App\Wishlist_Item');
    }
    public function profile(){
    	return $this->belongsTo('App\Profile');
    }
    public function users_roles(){
    	return $this->hasMany('App\User_role');
    }
    public function news(){
    	return $this->hasMany('App\New');
    }
    public function shops(){
    	return $this->hasMany('App\Shop');
    }
    public function return_items(){
    	return $this->hasMany('App\Return_Item');
    }
    public function reviews(){
    	return $this->hasMany('App\Review');
    }
    public function shop_products(){
    	return $this->hasMany('App\Shop_Product');
    }
    public function abuses(){
    	return $this->hasMany('App\Abuses');
    }
    public function orders(){
    	return $this->hasMany('App\Order');
    }
}