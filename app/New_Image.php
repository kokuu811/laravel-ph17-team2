<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New_Image extends Model
{
	protected $fillable = ['images', 'thurm','new_id'];
    public function new()
    {
    	return $this->belongsTo('App\New');
    }
}