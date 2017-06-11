<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Attribute_Value extends Model
{
	protected $fillable = ['categoty_id', 'attribute_value_id'];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function attributeValue()
    {
    	return $this->belongsTo('App\AttributeValue');
    }
}