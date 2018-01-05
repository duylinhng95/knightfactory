<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='cities';

    public function course()
    {
    	return $this->belongsTo('App\Course','city_id','id');
    }
}
