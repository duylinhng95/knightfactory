<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';
    protected $fillable=['firstname','lastname','email','phone','password'];

    public function student_classes()
    {
    	return $this->hasMany('App\StudentClass','student_id','id');
    }
}
