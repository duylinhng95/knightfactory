<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\City;
use App\Course;
use App\Class1;
use Toastr;
use Illuminate\Support\Collection;

class CityController extends Controller
{
    public function listCity()
    {
        $cities = City::All();
        return view('admin.city.list', compact('cities'));
    }

    public function getAddCity()
    {
        return view('admin.city.add');
    }

    public function postAddCity(Request $rq)
    {
        $this->validate($rq,
        [
            'name' => 'required|unique:cities',
            'address' => 'required|unique:cities',
            'image' => 'required',
            'description' => 'required'
        ]);
        $data = Input::except('image');
        $data['alias'] = str_slug($data['name']);

        if($rq->hasFile('image'))
        {
            $file = $rq->file('image');
        	$filename = $file->getClientOriginalName('image');
        	$rq ->file = $filename;
        	$images = time().".".$filename;
        	$destinationPath = public_path('admin/images/city/image');
        	$file ->move($destinationPath,$images);
        	$data['image'] = $images;
        }
        $city = City::Create($data);
        Toastr::success('Add successful City', $title = null, $options = []);
        return redirect('administrator/city');
    }

    public function getEditCity(City $city)
    {
        return view('admin/city/edit', compact('city'));
    }

    public function putEditCity(City $city, Request $rq)
    {
        $this->validate($rq,
        [
            'name' => 'required',
            'address' => 'required',
            'description' => 'required'
        ]
        );
        $data = Input::All();
        $data['alias'] = str_slug($data['name']);
        if($rq->hasFile('image'))
        {
            $oldfile=public_path('admin/images/city/image/').$city->image;
            unlink($oldfile);
            $file = $rq->file('image');
        	$filename = $file->getClientOriginalName('image');
        	$rq ->file = $filename;
        	$images = time().".".$filename;
        	$destinationPath = public_path('admin/images/city/image');
        	$file ->move($destinationPath,$images);
        	$data['image'] = $images;
        }
        $city ->update($data);
        Toastr::success('Edit successful Category', $title = null, $options = []);
        return redirect('administrator/city');
    }
    public function listCourse_is_City($id){
        $classes = Class1::where('city_id',$id)->get();
        $courses= collect(null);
        foreach($classes as $class){
            $course = $class->course;
            $courses->push($course);
        }
        $courses=$courses->unique();
        $id_city = $id;
        return view('admin.course.index', compact('courses', 'id_city'));
    }

    public function deleteCity(City $city)
    {
        $oldfile=public_path('admin/images/city/image/').$city->image;
        unlink($oldfile);
        $city->classes()->delete();
        $city->delete();
        Toastr::success('Delete successful City', $title = null, $options = []);
        return redirect('administrator/city');
    }
}
