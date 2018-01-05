<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='events';

    public function stuEvents()
    {
    	return $this->hasMany('App\StudentEvent','event_id','id');
    }

    public function speEvents()
    {
    	return $this->hasMany('App\SpeakerEvent','event_id','id');
    }
}
