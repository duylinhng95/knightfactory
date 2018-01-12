<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Category;

class CourseCateController extends Controller
{
    public function listCourse($name)
    {
        $category = Category::where('alias', $name)->first();
        $courses = Course::where('category_id', $category ->id)->get();
        return view('admin.course.index', compact('courses', 'category'));
    }
}
