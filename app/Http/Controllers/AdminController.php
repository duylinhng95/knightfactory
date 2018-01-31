<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class1;
use App\Student;
use App\City;
use App\Course;
use App\Speaker;
use App\Blog;
use App\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $countCity = City::All();
        $countSpeaker = Speaker::All();
        $countCourse = Course::All();
        $countClass = Class1::All();
        $countStudent = Student::All();
        $countBlog = Blog::All();
        $countUser = User::All();
        return view('admin.dashboard', compact('countClass', 'countStudent', 'countCity', 'countSpeaker', 'countCourse', 'countBlog', 'countUser'));
    }
}
