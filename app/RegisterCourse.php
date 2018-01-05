<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterCourse extends Model
{
    protected $table='regisCourse';

    public function student()
    {
    	return $this->belongsTo('App\Student','student_id','id');
    }

    public function course()
    {
    	return $this->belongsTo('App\Course','course_id','id');
    }
}
