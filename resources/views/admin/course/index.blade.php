@extends('admin.master-admin')
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">@if(isset($category)) {{$category->name}} course @else Course @endif</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{url('administrator/course/add-course')}}"class="btn btn-info"><i class="fa fa-plus"></i> Add Course</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th  style="text-align: center;">Index</th>
                                <th  style="text-align: center;">Image</th>
                                <th  style="text-align: center;">Name</th>
                                <th  style="text-align: center;">Edit</th>
                                <th  style="text-align: center;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $index => $course)
                                <tr class="odd gradeX" style="text-align: center;">
                                    <td style="padding-top: 20px;" >{{ $index + 1 }}</td>
                                    <td><img src="{{asset('admin/images/course/'.$course->image)}}" alt="{{ $course ->name }}" style="width: 70px; height: 50px;"> </td>
                                    <td style="padding-top: 20px;" ><a href="{{ url('administrator/class/'.$course->id) }}">{{ $course ->name }}</a></td>
                                    <td style="padding-top: 20px;" class="center"><a href="{{url('administrator/course/edit-course')}}/{{$course->id}}"><span class="glyphicon glyphicon-edit"></span></a> </td>
                                    <td style="padding-top: 20px;" class="center"><a href="{{url('administrator/course/delete-course')}}/{{$course->id}}" onclick="return confirm('Are you sure you want to delete the selected course? This action will also remove all its classes. ?');"><span class="glyphicon glyphicon-trash"></span></a> </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@stop
