<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class1 extends Model
{
    protected $table ='classes';
    protected $fillable=['name', 'alias', 'start_date', 'end_date', 'description','city_id','course_id','speaker_id'];

    public function student_classes()
    {
    	return $this->hasMany('App\StudentClass','class_id','id');
    }

    public function speaker()
    {
    	return $this->belongsTo('App\Speaker','speaker_id','id');
    }

    public function cityCourses()
    {
        return $this->belongsTo('App\CityCourse','cityCourse_id','id');
    }
}
