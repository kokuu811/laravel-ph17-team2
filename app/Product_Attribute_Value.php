<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Attribute_Value extends Model
{
    public function product(){
    	return $this->belongsTo('App\Product');
    }
    public function attribute_value(){
    	return $this->belongsTo('App\Attribute_Value');
    }
}