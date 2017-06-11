<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name', 'alias','parent_id','description'];
    public function products()
    {
    	return $this->hasMany('App\Product');
    }
     public function categoryAttributeValues()
    {
    	return $this->hasMany('App\CategoryAttributeValue');
    }
}