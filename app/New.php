<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
    protected $fillable = ['title', 'description','content','image','user_id','new_category_id','alias'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function newCategory()
    {
    	return $this->belongsTo('App\NewCategory');
    }
    public function newImages()
    {
    	return $this->hasMany('App\NewImage');
    }
}