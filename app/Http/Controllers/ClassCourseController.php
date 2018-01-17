<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class1;
use App\Course;
use App\Category;
use App\City;
use App\Speaker;
use App\StudentClass;
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

    public function postAddClass(Request $rq,$id)
    {
        $this->validate($rq,
        [
            'speaker_id' => 'required',
            'city_id' => 'required',
            'name' => 'required|unique:classes',
            'start_date' => 'required|after_or_equal:today',
            'end_date' => 'required|after_or_equal:start_date',
            'description' => 'required'
        ],
        [
            'speaker_id.required' => 'The speaker field is required.',
            'city_id.required' => 'The City field is required.',
        ]);
        $data = Input::All();
        $data['course_id']= $id;
        $data['alias'] = str_slug($data['name']);
        $class = Class1::create($data);
        return redirect('administrator/class/'.$id);
    }

    public function getEditClass(Class1 $class)
    {
        $course = Course::where('id', $class->course_id)->first();
        $category = Category::where('id', $course->category_id)->first();
        $cities = City::All()->pluck('name','id');
        $speakers = Speaker::All()->pluck('name','id');
        return view('admin.class.edit', compact('class', 'course', 'category', 'cities', 'speakers'));
    }

    public function putEditClass(Request $rq, Class1 $class)
    {
        $this->validate($rq,
        [
            'speaker_id' => 'required',
            'city_id' => 'required',
            'name' => 'required',
            'start_date' => 'required|after_or_equal:today',
            'end_date' => 'required|after:start_date',
            'description' => 'required'
        ],
        [
            'speaker_id.required' => 'The speaker field is required.',
            'city_id.required' => 'The City field is required.',
        ]);
        $data = Input::All();
        $data['course_id']= $class->course_id;
        $data['alias'] = str_slug($data['name']);
        $class -> update($data);
        return redirect('administrator/class/'.$class->course_id);
    }
    public function deleteClass($id, Class1 $class)
    {
        $class->delete();
        return redirect('administrator/class/'.$id);
    }

    public function listStudentClass(Class1 $class)
    {
        $students = StudentClass::where('class_id', $class->id)->get();
        return view('admin.class.list-student', compact('class', 'students'));
    }
}
