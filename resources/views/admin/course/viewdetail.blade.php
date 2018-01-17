@extends('admin.master-admin')
@section('content')
    <h2 style="text-align: center; padding-top: 20px;">VIEW DETAIL COURSE</h2>
    <p>Course: {{$course->name}}</p>
    <a href="{{ url('administrator/course/edit-course/'.$course->id) }}" class="btn btn-info">Edit course</a>
    <button class="btn btn-info" onclick="goBack()">Back</button>
    <hr>
    {!!$course->content!!}
    <hr>
    <a href="{{ url('administrator/course/edit-course/'.$course->id) }}" class="btn btn-info">Edit course</a>
    <button class="btn btn-info" onclick="goBack()">Back</button>
@stop
