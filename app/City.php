<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table='cities';
    protected $fillable= ['name', 'address','image', 'alias', 'description'];

    public function classes()
    {
    	return $this->hasMany('App\Class1','city_id','id');
    }
}
