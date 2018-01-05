<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';

    public function city()
    {
    	return $this->hasOne('App\City','city_id','id');
    }

    public function subject()
    {
    	return $this->hasOne('App\Subject','subject_id','id');
    }
    public function speaker()
    {
    	return $this->hasOne('App\Speaker','speaker_id','id');
    }

    public function regisCourses()
    {
    	return $this->hasMany('App\RegisterCourse','course_id','id');	
    }
}
