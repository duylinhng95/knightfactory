@extends('admin.master-admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Students</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">                    
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($students as $index => $student)
                            <tr class="odd gradeX">
                            	<td>{{$index+1}}</td>
                                <td>{{$student->firstname}}</td>
                                <td>{{$student->lastname}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone}}</td>
                                <td style="text-align: center;"><a href="{{route('student').'/'.$student->id}}"><i class="fa fa-info-circle btn btn-info" aria-hidden="true" ></i></a></td>
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