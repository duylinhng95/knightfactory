<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $table='student_class';
    protected $fillable = ['student_id', 'class_id'];

    public function student()
    {
    	return $this->belongsTo('App\Student','student_id','id');
    }
    public function class()
    {
    	return $this->belongsTo('App\Class1','class_id','id');
    }
}
