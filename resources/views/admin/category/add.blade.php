@extends('admin.master-admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create New Category</h1>
        </div>
    <!-- /.col-lg-12 -->
    </div>
<!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::open(['url'=>'administrator/category/add']) !!}
                                @include('admin.category.form')
                            {!! Form::close() !!}
                        </div>
                    <!-- /.col-lg-6 (nested) -->
                    </div>
                <!-- /.row (nested) -->
                </div>
            <!-- /.panel-body -->
            </div>
        <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop
