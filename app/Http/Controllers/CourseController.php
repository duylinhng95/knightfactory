<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Course;
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
        $categories = Category::all();
        return view('admin.course.add-course', compact('categories'));
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
            'category'=> 'required',
            'content' => 'required',
            'image' => 'required|max:2000',
        ],
        [
            'category.required' => 'Category is required',
            'name.required' => 'Name is required',
            'content.required' => 'Content is required',
            'image.required' => 'Image is required',
            'image.max' => 'Limit size is 2000kb'
        ]
    );
        $addCourse = new Course;
        $addCourse ->category_id = $rq->input('category');
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
            'content' => 'required',
            'image' => 'required|max:2000',
        ],
        [
            'name.required' => 'Title is required',
            'content.required' => 'Content is required',
            'image.required' => 'Image is required',
            'image.max' => 'Limit size is 2000kb'
        ]
    );
        $data=$rq->all();
        $editCourse = Course::find($id);
        $data['alias'] = str_slug($data['name']);
        $data['category']=$editCourse->category_id;
        if($rq->hasFile('image'))
        {
            $file = $rq->file('image');
            $filename = $file->getClientOriginalName('image');
            $images = time()."_".$filename;
            $destinationPath = public_path('/admin/images/course/');
            $file->move($destinationPath, $images);
            $oldfile=public_path('admin/images/course/').$images;
            unlink($oldfile);
            $data['image'] = $images;
        }
        $editCourse ->update($data);
        Toastr::success('Edit successful Course', $title = null, $options = []);
        return redirect()->route('list-courses');
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
}
