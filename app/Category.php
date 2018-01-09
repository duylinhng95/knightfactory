<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';

    public function courses()
    {
    	return $this->hasMany('App\Course','category_id','id');
    }

    public function classes()
    {
    	return $this-.hasManyThrough('App\Class','App\Course','category_id','course_id','id','id');
    }    
}
