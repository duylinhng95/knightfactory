<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class1;
use App\Course;
use App\City;
use App\Speaker;
class ClassController extends Controller
{
    public function listClass()
    {
        $classes = Class1::OrderBy('id', 'desc')->get();
        return view('admin.class.list', compact('classes'));
    }

    public function getAddClass()
    {
        $course = Course::All()->pluck('name', 'id');
        $cities = City::All()->pluck('name','id');
        $speakers = Speaker::All()->pluck('name','id');
        return view('admin.class.add', compact('course', 'category', 'cities', 'speakers'));
    }
}
