<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';

    public function student_classes()
    {
    	return $this->hasMany('App\StudentClass','student_id','id');
    }
}
