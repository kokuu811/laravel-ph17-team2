<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['status', 'total_price','phone','address','shipping_name','shipping_address','shipping_phone','name','user_id','voucher_code'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function orderProducts()
    {
    	return $this->hasMany('App\OrderProduct');
    }
}