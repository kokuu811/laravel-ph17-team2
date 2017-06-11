<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['name', 'logo','address','description','user_id'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function newImages()
    {
    	return $this->hasMany('App\NewImage');
    }
    public function shopProducts()
    {
    	return $this->hasMany('App\ShopProduct');
    }
    public function vouchers()
    {
    	return $this->hasMany('App\Voucher');
    }
}