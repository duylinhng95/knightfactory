<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class1;
use App\Course;
use App\Category;
use App\City;
use App\Speaker;
use Illuminate\Support\Facades\Input;

class ClassCourseController extends Controller
{
    public function listClass($id)
    {
        $course = Course::find($id);
        $classes = Class1::where('course_id', $id)->get();
        return view('admin.class.list', compact('classes', 'course'));
    }

    public function getAddClass($id)
    {
        $course = Course::find($id);
        $category = Category::where('id', $course->category_id)->first();
        $cities = City::All()->pluck('name','id');
        $speakers = Speaker::All()->pluck('name','id');
        return view('admin.class.add', compact('course', 'category', 'cities', 'speakers'));
    }

    public function postAddClass($id)
    {
        $data = Input::All();
        $data['course_id']= $id;
        $data['alias'] = str_slug($data['name']);
        $data = Class1::create($data);
        return redirect('administrator/class/'.$id);
    }

    public function getEditClass($id, Class1 $class)
    {
        $course = Course::find($id);
        $category = Category::where('id', $course->category_id)->first();
        $cities = City::All()->pluck('name','id');
        $speakers = Speaker::All()->pluck('name','id');
        return view('admin.class.edit', compact('class', 'course'. 'category', 'cities', 'speakers'));
    }
    public function deleteClass($id, Class1 $class)
    {
        $class->delete();
        return redirect('administrator/class/'.$id);
    }
}
