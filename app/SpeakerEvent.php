<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpeakerEvent extends Model
{
    protected $table='speEvents';

    public function speaker()
    {
    	return $this->belongsTo('App\Speaker','speaker_id','id');
    }

    public function event()
    {
    	return $this->belongsTo('App\Event','event_id','id');
    }
}
