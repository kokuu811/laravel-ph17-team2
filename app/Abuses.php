<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abuses extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function shop_product(){
    	return $this->belongsTo('App\Shop_Product');
    }
}