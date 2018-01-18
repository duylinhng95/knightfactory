<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Speaker;
use App\Http\Requests\SpeakerRequest;
use Toastr;

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
        Toastr::success('Add successful Speaker', $title = null, $options = []);
    	return redirect('administrator/speaker');
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
            $oldfile=public_path('admin/images/speaker/avatar/').$speaker->avatar;
            unlink($oldfile);
			$file=$request->file('avatar');
	    	$filename=$file->getClientOriginalName('avatar');
	    	$request->file=$filename;
	    	$images=time().".".$filename;
	    	$destinationPath=public_path('admin/images/speaker/avatar');
	    	$file->move($destinationPath,$images);
	    	$data['avatar']=$images;
		}
    	$speaker->update($data);
         Toastr::success('Edit successful Speaker', $title = null, $options = []);
    	return redirect('administrator/speaker');
    }
    // public function deleteSpeaker(Speaker $speaker)
    // {
    //     if (file_exists(public_path('admin/images/speaker/avatar/').$speaker->avatar))
    //     {
    //         $oldfile=public_path('admin/images/speaker/avatar/').$speaker->avatar;
    //         unlink($oldfile);
    //     }
    // 	$speaker->delete();
    //      Toastr::success('Delete successful Speaker', $title = null, $options = []);
    // 	return redirect('administrator/speaker');
    // }
}
