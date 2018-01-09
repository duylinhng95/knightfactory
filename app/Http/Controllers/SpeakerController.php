<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Speaker;

class SpeakerController extends Controller
{
    public function showSpeakers()
    {
    	$speaker=Speaker::all();
    	return view('admin.speaker.show',compact('speaker'));
    }
}
