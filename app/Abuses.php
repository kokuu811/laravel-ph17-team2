<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abuses extends Model
{
	protected $fillable = ['content', 'shop_id','shop_product_id'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function shopProduct()
    {
    	return $this->belongsTo('App\ShopProduct');
    }
}