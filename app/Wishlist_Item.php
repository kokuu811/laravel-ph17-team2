<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist_Item extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
}