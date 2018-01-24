<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class1;
use App\City;
use App\Course;

class PageController extends Controller
{
    public function getIndex()
    {
        return view('page.index');
    }
    public function listCouse_is_City($id){
        $classes = Class1::where('city_id',$id)->get();
        $city = City::find($id);
        $courses= collect(null);
        foreach($classes as $class){
            $course = $class->course;
            $courses->push($course);
        }
        $courses=$courses->unique();
        $id_city = $id;
        return view('page.listcourse_is_branch', compact('courses', 'id_city', 'city'));
    }
    public function listClass_is_Course($id){
        $course = Course::find($id);
        $classes = Class1::where('city_id',$id)->get();
        return view('page.listclass_is_course', compact('classes', 'course'));
    }
}
