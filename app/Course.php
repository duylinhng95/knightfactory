<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';

    public function classes()
    {
        return $this->hasMany('App\Class','course_id','id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}
