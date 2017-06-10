<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New_Image extends Model
{
    public function new(){
    	return $this->belongsTo('App\New');
    }
}