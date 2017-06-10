<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute_Value extends Model
{
    public function attribute(){
    	return $this->belongsTo('App\Attribute');
    }
    public function product_attribute_values(){
    	return $this->hasMany('App\Product_Attribute_Value');
    }
    public function category_attribute_values(){
    	return $this->hasMany('App\Category_Attribute_Value');
    }
}