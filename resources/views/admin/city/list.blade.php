@extends('admin.master-admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Branches</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ url('administrator/city/add') }}" class="btn btn-info"><i class="fa fa-plus"></i>Add Branch</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Picture</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cities as $index=>$city)
                            <tr class="odd gradeX">
                            	<td>{{$index+1}}</td>
                            	<td><a href="{{url('administrator/city')}}/{{$city->id}}">{{ $city ->name }}</a></td>
                            	<td>{{ $city ->address }}</td>
                            	<td><img  style="width: 70px; height: 50px;" src="{{asset('admin/images/city/image/'.$city->image)}}"></td>
                            	<td>{{ $city ->description }}</td>
                                <td class="center"><a href="{{ url('administrator/city/edit/'.$city->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                <td class="center"><a href="{{ url('administrator/city/delete/'.$city->id) }}" onclick="return confirm('Are you sure you want to delete the selected department? This action will also remove all its classes. ?');"><span class="glyphicon glyphicon-trash"></span></a></td>
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
