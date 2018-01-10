<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable= ['name', 'address','alias'];

    public function class()
    {
    	return $this->belongsTo('App\Class','city_id','id');
    }
}
