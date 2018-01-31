<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class1;
use App\Course;
use App\City;
use App\Speaker;
use App\StudentClass;
use Toastr;
use Illuminate\Support\Facades\Input;
class ClassController extends Controller
{
    public function listClass()
    {
        $classes = Class1::OrderBy('id', 'desc')->get();
        return view('admin.class.list', compact('classes'));
    }

    public function getAddClass()
    {
        $courses = Course::All()->pluck('name', 'id');
        $cities = City::All()->pluck('name','id');
        $speakers = Speaker::All()->pluck('name','id');
        return view('admin.class.add', compact('courses', 'category', 'cities', 'speakers'));
    }

    public function postAddClass(Request $rq)
    {
        $this->validate($rq,
        [
            'course_id' => 'required',
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
            'course_id.required' => 'The Course field is required.',
        ]);
        $data = Input::All();
        $data['alias'] = str_slug($data['name']);
        $class = Class1::create($data);
        Toastr::success('Add successful new class', $title = null, $options = []);
        return redirect('administrator/class');
    }

    public function getEditClass(Class1 $class)
    {
        $courses = Course::All()->pluck('name', 'id');
        $cities = City::All()->pluck('name','id');
        $speakers = Speaker::All()->pluck('name','id');
        return view('admin.class.edit', compact('class', 'courses', 'cities', 'speakers'));
    }

    public function putEditClass(Class1 $class, Request $rq)
    {
        $this->validate($rq,
        [
            'course_id' => 'required',
            'speaker_id' => 'required',
            'city_id' => 'required',
            'name' => 'required',
            'start_date' => 'required|after_or_equal:today',
            'end_date' => 'required|after_or_equal:start_date',
            'description' => 'required'
        ],
        [
            'speaker_id.required' => 'The speaker field is required.',
            'city_id.required' => 'The City field is required.',
            'course_id.required' => 'The Course field is required.',
        ]);
        $data = Input::All();
        $data['alias'] = str_slug($data['name']);
        $class -> update($data);
        Toastr::success('Edit successful class', $title = null, $options = []);
        return redirect('administrator/class');
    }

    public function deleteClass(Class1 $class)
    {
        $class ->delete();
        Toastr::success('Edit successful class', $title = null, $options = []);
        return redirect('administrator/class');
    }

    public function listStudentClass(Class1 $class)
    {
        $students = StudentClass::where('class_id', $class)->get();
        return view('admin.class.list-student', compact('class', 'students'));
    }
}
