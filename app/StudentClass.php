<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $table='student_class';

    public function student()
    {
    	return $this->belongsTo('App\Student','student_id','id');
    }
    public function class()
    {
    	return $this->belongsTo('App\Class','class_id','id');
    }
}
