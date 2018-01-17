<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';

    public function cityCourses()
    {
	return $this->hasMany('App\CityCourse','course_id','id');    
    }
}
