<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New_Category extends Model
{
    public function news(){
    	return $this->hasMany('App\New');
    }
}