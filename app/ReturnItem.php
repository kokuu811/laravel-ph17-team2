<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Return_Item extends Model
{
	protected $fillable = ['shop_id', 'shop_product_id','content'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function shopProduct()
    {
    	return $this->belongsTo('App\ShopProduct');
    }
}