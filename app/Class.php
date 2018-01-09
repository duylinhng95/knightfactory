<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $table='classes';

    public function student_classes()
    {
    	return $this->hasMany('App\StudentClass','class_id','id');    
    }

    public function course()
    {
    	return $this->belongsTo('App\Course','course_id','id');
    }

    public function cities()
    {
    	return $this->hasMany('App\City','city_id','id');
    }
}
