<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class1;

class ClassController extends Controller
{
    public function listClass()
    {
        $classes = Class1::OrderBy('id', 'desc')->get();
        return view('admin.class.list', compact('classes'));
    }
}
