@extends('admin.master-admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Speakers</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('create-speaker')}}" class="btn btn-info"><i class="fa fa-plus"></i>Add Speaker</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($speakers as $index => $speaker)
                            <tr class="odd gradeX">
                            	<td>{{$index+1}}</td>
                            	<td><img src="{{asset('admin/images/speaker/avatar/'.$speaker->avatar)}}" alt="{{ $speaker ->name }}" style="width: 70px; height: 50px;"></td>
                            	<td>{{$speaker->name}}</td>
                            	<td>{{$speaker->description}}</td>
                                <td class="center"><a href="{{route('speaker').'/'.$speaker->id.'/edit'}}"><span class="glyphicon glyphicon-edit"></a></span></td>
                                <td class="center"><a href="{{route('speaker').'/'.$speaker->id.'/delete'}}" onclick="return confirm('Are you sure ?');"><span class="glyphicon glyphicon-trash"></a></span></td>
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