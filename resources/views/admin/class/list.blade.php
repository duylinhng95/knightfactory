@extends('admin.master-admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Class</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ url('administrator/class/add/'.$course->id) }}" class="btn btn-info"><i class="fa fa-plus"></i>Add Class</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>City</th>
                                <th>Speaker</th>
                                <th>Course</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
							@foreach($classes as $index=>$class )
                            <tr class="odd gradeX">
                            	<td>{{$index+1}}</td>
                            	<td>{{$class->name}}</td>
                            	<td>{{$class->course->category->name}}</td>
                            	<td>{{$class->city->name}}</td>
                            	<td>{{$class->speaker->name}}</td>
                            	<td>{{$class->course->name}}</td>
                            	<td>{{$class->start_date}}</td>
                            	<td>{{$class->end_date}}</td>
                                <td class="center"><a href="{{ url('administrator/class/edit/'.$class->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                <td class="center"><a href="{{ url('administrator/class/delete'.'/'.$class->course_id.'/'.$class->id) }}" onclick="return confirm('Are you sure ?');"><span class="glyphicon glyphicon-trash"></span></a></td>
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
