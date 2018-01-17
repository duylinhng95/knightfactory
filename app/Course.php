<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';
    protected $fillable = ['name', 'alias', 'content', 'image', 'category_id'];

    public function classes()
    {
        return $this->hasMany('App\Class1','course_id','id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}
