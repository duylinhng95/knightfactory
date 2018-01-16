@extends('admin.master-admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$student->firstname}} {{$student->lastname}}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>Detail</h1>
                            <ul>
                                <li><p><strong>First Name: </strong>{{$student->firstname}}</p></li>
                                <li><p><strong>Last Name: </strong>{{$student->lastname}}</p></li>
                                <li><p><strong>Email: </strong>{{$student->email}}</p></li>
                                <li><p><strong>Phone: </strong>{{$student->phone}}</p></li>
                                <li><p><strong>Password: </strong>{{$student->password}}</p></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h1>Action</h1>
                            <ul>
                                <li><a href="{{route('edit-student',$student)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></li>
                                <li><a href="{{route('delete-student',$student)}}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@stop