<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\City;
use Toastr;

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

    public function deleteCity(City $city)
    {
        $oldfile=public_path('admin/images/city/image/').$city->image;
        unlink($oldfile);
        $city->delete();
        Toastr::success('Delete successful City', $title = null, $options = []);
        return redirect('administrator/city');
    }
}
