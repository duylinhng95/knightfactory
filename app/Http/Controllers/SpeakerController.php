<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Speaker;
use App\Http\Requests\SpeakerRequest;

class SpeakerController extends Controller
{
    public function showSpeakers()
    {
    	$speakers=Speaker::all();
    	return view('admin.speaker.show',compact('speakers'));
    }
    public function addSpeaker()
    {
    	return view('admin.speaker.create');
    }
    public function saveSpeaker(SpeakerRequest $request)
    {
    	$data=Input::except('avatar');
    	
    	$file=$request->file('avatar');
    	$filename=$file->getClientOriginalName('avatar');
    	$request->file=$filename;
    	$images=time().".".$filename;
    	$destinationPath=public_path('admin/images/speaker/avatar');
    	$file->move($destinationPath,$images);
    	$data['avatar']=$images;

    	$speaker=Speaker::create($data);
    	return redirect('adss/speaker')->withSuccess('Speaker has been created');
    }
    public function editSpeaker(Speaker $speaker)
    {
    	return view('admin.speaker.edit',compact('speaker'));
    }
    public function updateSpeaker(Speaker $speaker, Request $request)
    {
    	$data=Input::all();
    	if ($request->hasFile('avatar'))
		{
			$file=$request->file('avatar');
	    	$filename=$file->getClientOriginalName('avatar');
	    	$request->file=$filename;
	    	$images=time().".".$filename;
	    	$destinationPath=public_path('admin/images/speaker/avatar');
	    	$file->move($destinationPath,$images);
	    	$data['avatar']=$images;
		}    		    	
    	$speaker->update($data);
    	return redirect('adss/speaker')->withSuccess($speaker->name.'has been updated');
    }
    public function deleteSpeaker(Speaker $speaker)
    {
    	$speaker->delete();
    	return redirect('adss/speaker')->withSuccess('Speaker has been deleted');
    }
}
