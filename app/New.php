<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function new_category(){
    	return $this->belongsTo('App\New_Category');
    }
    public function new_images(){
    	return $this->hasMany('App\New_Image');
    }
}