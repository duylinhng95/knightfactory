@extends('admin.master-admin')
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Blogs</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{url('administrator/blog/add-blog')}}"class="btn btn-info"><i class="fa fa-plus"></i> Add Blog</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th  style="text-align: center;">Index</th>
                                <th  style="text-align: center;">Title</th>
                                <th  style="text-align: center;">Thumbnail</th>
                                <th  style="text-align: center;">Views</th>
                                <th  style="text-align: center;">Edit</th>
                                <th  style="text-align: center;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                                <tr class="odd gradeX" style="text-align: center;">
                                    <td style="padding-top: 20px;" >1</td>
                                    <td style="padding-top: 20px;" ><a href="#">{{$blog->title}}</a></td>
                                    <td><img src="{{asset('admin/images/blog/'.$blog->thumbnail)}}" alt="{{ $blog ->title }}" style="width: 70px; height: 50px;"> </td>
                                    <td style="padding-top: 20px;" >232</td>
                                    <td  style="padding-top: 20px;" class="center"><a href="{{url('administrator/blog/edit-blog')}}/{{$blog->id}}"><span class="glyphicon glyphicon-edit"></span></a> </td>
                                    <td  style="padding-top: 20px;" class="center"><a href="{{url('administrator/blog/delete-blog')}}/{{$blog->id}}" onclick="return confirm('Are you sure ?');"><span class="glyphicon glyphicon-trash"></span></a> </td>
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
