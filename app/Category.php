<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
    	return $this->hasMany('App\Product');
    }
     public function category_attribute_values(){
    	return $this->hasMany('App\Category_Attribute_Value');
    }
}