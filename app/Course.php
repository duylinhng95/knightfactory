<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';

    public function classes()
    {
	return $this->hasMany('App\Class1','course_id','id');
    }
}
