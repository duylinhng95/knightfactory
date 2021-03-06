<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use App\Category;
use App\Course;
use App\Class1;
use App\City;
use Toastr;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.add-course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
        $this->validate($rq,
        [
            'name' => 'required',
            'description'=> 'required|max:300',
            'content' => 'required',
            'image' => 'required|max:2000',
        ],
        [
            'description.required' => 'Category is required',
            'description.max' => 'limit 300 characters',
            'name.required' => 'Name is required',
            'content.required' => 'Content is required',
            'image.required' => 'Image is required',
            'image.max' => 'Limit size is 2000kb'
        ]
    );
        $addCourse = new Course;
        $addCourse ->description = $rq->input('description');
        $addCourse ->name = $rq->input('name');
        $addCourse ->alias = str_slug($rq->input('name'));
        $addCourse ->content = $rq->input('content');
        if($rq->hasFile('image'))
        {
            $file = $rq->file('image');
            $filename = $file->getClientOriginalName('image');
            $images = time()."_".$filename;
            $destinationPath = public_path('/admin/images/course');
            $addCourse->image = $images;
            $file->move($destinationPath, $images);

        }
        $addCourse ->save();
        Toastr::success('Add successful Course', $title = null, $options = []);
        return redirect()->route('list-courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('admin.course.viewdetail', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('admin.course.edit-course', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, $id)
    {
        $this->validate($rq,
        [
            'name' => 'required',
            'description' => 'required|max:300',
            'content' => 'required',
            'image' => 'max:2000',
        ],
        [
            'description.required' => 'description is required',
            'description.max' => 'limit 300 characters',
            'name.required' => 'Title is required',
            'content.required' => 'Content is required',
            'image.max' => 'Limit size is 2000kb'
        ]
    );
        $editCourse = Course::find($id);
        $editCourse->name = $rq->name;
        $editCourse->alias = str_slug($rq->name);
        $editCourse->description = $rq->description;
        $editCourse->content = $rq->content;
        if($rq->hasFile('image'))
        {
            $file = $rq->file('image');
            $filename = $file->getClientOriginalName('image');
            $images = time()."_".$filename;
            $destinationPath = public_path('/admin/images/course/');
            $file->move($destinationPath, $images);
            $oldfile=public_path('admin/images/course/').$editCourse->image;
            unlink($oldfile);
            $editCourse->image = $images;
        }
        $editCourse ->update();
        Toastr::success('Edit successful Course', $title = null, $options = []);
        return redirect()->route('list-courses');
    }
    public function updatescu(){
        return Artisan::call('down');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCourse = Course::find($id);
        $deleteCourse->classes()->delete();
        $oldfile=public_path('admin/images/course/').$deleteCourse->image;
        unlink($oldfile);
        $deleteCourse ->delete();
        Toastr::success('Delete successful Course', $title = null, $options = []);
        return redirect()->route('list-courses');
    }
    public function listclass_is_course(Course $course, City $city ){
        $classes = Class1::where('course_id',$course->id)
            ->where('city_id', $city->id)
            ->orderBy('id', 'desc')->get();
        return view('admin.class.list', compact('classes'));
    }
}
