<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table='cities';
    protected $fillable= ['name', 'address','image', 'alias', 'description'];

    public function cityCourses()
    {
    	return $this->hasMany('App\CityCourse','city_id','id');
    }
}
