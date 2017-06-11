<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
	protected $fillable = ['image', 'product_id','thurm'];
    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}