<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $fillable = ['date_of_birth', 'phone','address','image','gender','user_id'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}