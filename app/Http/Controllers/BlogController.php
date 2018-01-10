<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.add-blog');
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
                'title' => 'required|unique:blogs',
                'description' => 'required',
                'content' => 'required',
                'thumbnail' => 'required|max:2000'
            ],
            [
                'title.required' => 'Title is required',
                'title.unique' => 'The title has already been taken',
                'description.required' => 'Description is required',
                'content.required' => 'Content is required',
                'thumbnail.required' => 'Thumbnail is required',
                'thumbnail.max' => 'Limit size is 2000kb'
            ]
        );
            $addBlog = new Blog;
            $addBlog ->title = $rq->input('title');
            $addBlog ->alias = str_slug($rq->input('title'));
            $addBlog ->description = $rq->input('description');
            $addBlog ->content = $rq->input('content');
            if($rq->hasFile('thumbnail'))
            {
                $file = $rq->file('thumbnail');
                $filename = $file->getClientOriginalName('thumbnail');
                $images = time()."_".$filename;
                $destinationPath = public_path('/admin/images/blog');
                $addBlog->thumbnail = $images;
                $file->move($destinationPath, $images);

            }
            $addBlog ->save();
            // Toastr::success('Add successful Article', $title = null, $options = []);
            return redirect()->route('list-blogs');
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit-blog', compact('blog'));
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
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
        ],
        [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'content.required' => 'Content is required',
        ]
    );
        $editBlog = Blog::find($id);
        $editBlog ->title = $rq->input('title');
        $editBlog ->alias = str_slug($rq->input('title'));
        $editBlog ->description = $rq->input('description');
        $editBlog ->content = $rq->input('content');
        if($rq->hasFile('thumbnail'))
        {
            $file = $rq->file('thumbnail');
            $filename = $file->getClientOriginalName('thumbnail');
            $images = time()."_".$filename;
            $destinationPath = base_path('/page/images/thumbnail');
            $file->move($destinationPath, $images);
            $oldfile = $editBlog->thumbnail;
            Storage::delete($oldfile);
            $editBlog['thumbnail'] = $images;
        }
        $editBlog ->update();
        // Toastr::success('Edit successful Article', $title = null, $options = []);
        return redirect()->route('list-blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteBlog = Blog::find($id);
        $oldfile=public_path('admin/images/blog/').$deleteBlog->thumbnail;
        unlink($oldfile);
        $deleteBlog ->delete();
        return redirect()->route('list-blogs');
    }
}
