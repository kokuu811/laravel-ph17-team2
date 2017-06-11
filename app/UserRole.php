<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
	protected $fillable = ['user_id', 'role_id'];
    public function role()
    {
    	return $this->belongsTo('App\Role');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}