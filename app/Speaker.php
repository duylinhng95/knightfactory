<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table='speakers';

    protected $fillable=['name','description','avatar'];

    public function classes()
    {
    	return $this->hasMany('App\Class','speaker_id','id');    
    }
}
