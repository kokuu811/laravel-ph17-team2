<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
    public function product(){
    	return $this->belongsTo('App\Product');
    }
}