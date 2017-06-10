<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Attribute_Value extends Model
{
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function attribute_value(){
    	return $this->belongsTo('App\Attribute_Value');
    }
}