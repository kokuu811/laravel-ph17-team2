<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
	protected $fillable = ['discount', 'shop_id','code','quantity'];
    public function shop()
    {
    	return $this->belongsTo('App\Shop');
    }
}