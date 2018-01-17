<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityCourse extends Model
{
    protected $table='cityCourses'
    public function city()
    {
    	return $this->belongsTo('App\City','city_id','id');
    }
    public function course()
    {
    	return $this->belongsTo('App\Course','course_id','id');
    }
    public function classes()
    {
    	return $this->hasMany('App\Class1','cityCourse_id','id');
    }
}
