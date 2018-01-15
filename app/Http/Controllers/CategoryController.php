<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Category;
use Toastr;

class CategoryController extends Controller
{
    public function listCategory()
    {
        $categories = Category::All();
        return view('admin.category.list', compact('categories'));
    }
    public function getAddCategory()
    {
        return view('admin.category.add');
    }

    public function postAddCategory(Request $rq)
    {
        $this->validate($rq,
        [
            'name' => 'required|unique:categories',
        ]
        );
        $data = Input::All();
        $data['alias'] = str_slug($data['name']);
        $category = Category::create($data);
         Toastr::success('Add successful Category', $title = null, $options = []);
        return redirect('administrator/category');
    }

    public function getEditCategory(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function putEditCategory(Category $category, Request $rq)
    {
        $this->validate($rq,
        [
            'name' => 'required',
        ]);
        $data = input::All();
        $data['alias'] = str_slug($data['name']);
        $category ->update($data);
         Toastr::success('Edit successful Category', $title = null, $options = []);
        return redirect('administrator/category');
    }

    public function deleteCategory(Category $category)
    {

        $category ->classes()->delete();
        foreach($category->courses as $category_course){
            $oldfile=public_path('admin/images/course/').$category_course->image;
            unlink($oldfile);
        }
        $category-> courses()->delete();
        $category->delete();
         Toastr::success('Delete successful Category', $title = null, $options = []);
        return redirect('administrator/category');
    }


}
