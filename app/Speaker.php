<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table='speakers';

    protected $fillable=['name','description','avatar'];

    public function class()
    {
    	return $this->belongsTo('App\Class','speaker_id','id');    
    }
}
