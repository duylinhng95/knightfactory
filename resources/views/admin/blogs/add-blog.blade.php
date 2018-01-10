@extends('admin.master-admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Blog</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{'save-blog'}}" method="post" id="form" enctype="multipart/form-data">
                                {!!csrf_field()!!}
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                                    </div>
                                    @if ($errors->has('title'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('title') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Thumbnail</label>
                                        <input type="file" id="thumbnail1" name="thumbnail" value="{{old('thumbnail')}}"><br>
                                        <img alt="" id="thumbnail" style="width: 100px; height: 100px;">
                                    </div>
                                    @if ($errors->has('thumbnail'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('thumbnail') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="description"  class="form-control">{{old('description')}}</textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('description') }}</strong>
                                          </span>
                                     @endif
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <h1>Content</h1>
                                        <textarea name="content" id="content"  class="form-control" rows="15">{{old('content')}}</textarea>
                                        <script>CKEDITOR.replace('content');</script>
                                    </div>
                                    @if ($errors->has('content'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('content') }}</strong>
                                          </span>
                                     @endif
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </form>

                        <!-- /.col-lg-8 (nested) -->

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
    <!-- /.row -->
    <script type="text/javascript">
        document.getElementById("thumbnail1").onchange = function () {
           var reader = new FileReader();

           reader.onload = function (e) {
               // get loaded data and render thumbnail.
               document.getElementById("thumbnail").src = e.target.result;
           };

           // read the image file as a data URL.
           reader.readAsDataURL(this.files[0]);
           };
    </script>
@stop
