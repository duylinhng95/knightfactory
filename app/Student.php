<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';

    public function regisCourses()
    {
    	return $this->hasMany('App\RegisterCourse','student_id','id');	
    }

    public function stuEvents()
    {
    	return $this->hasMany('App\StudentEvent','student_id','id');
    }
}
