<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['level', 'password','email','name'];
    public function wishlistItems()
    {
    	return $this->hasMany('App\WishlistItem');
    }
    public function profile()
    {
    	return $this->belongsTo('App\Profile');
    }
    public function usersRoles()
    {
    	return $this->hasMany('App\UserRole');
    }
    public function news()
    {
    	return $this->hasMany('App\New');
    }
    public function shops()
    {
    	return $this->hasMany('App\Shop');
    }
    public function returnItems()
    {
    	return $this->hasMany('App\ReturnItem');
    }
    public function reviews()
    {
    	return $this->hasMany('App\Review');
    }
    public function shopProducts()
    {
    	return $this->hasMany('App\ShopProduct');
    }
    public function abuses()
    {
    	return $this->hasMany('App\Abuses');
    }
    public function orders()
    {
    	return $this->hasMany('App\Order');
    }
}