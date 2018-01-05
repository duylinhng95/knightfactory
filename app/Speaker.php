<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table='speakers';

    public function course()
    {
    	return $this->belongsTo('App\Course','speaker_id','id');    
    }

    public function speEvents()
    {
    	return $this->hasMany('App\SpeakerEvent','speaker_id','id');
    }    
}
