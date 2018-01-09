<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table='speakers';

    public function class()
    {
    	return $this->belongsTo('App\Class','speaker_id','id');    
    }
}
