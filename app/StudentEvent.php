<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEvent extends Model
{
    protected $table='stuEvents';

    public function student()
    {
    	return $this->belongsTo('App\Student','student_id','id');
    }

    public function event()
    {
    	return $this->belongsTo('App\Event','event_id','id');
    }
}
