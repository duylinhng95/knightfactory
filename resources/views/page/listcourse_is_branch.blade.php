@extends('page.master')
@section('content')
<!-- Team#3
============================================= -->
<section id="team3" class="team team-3 bg-gray">
	<div class="container">
		<div class="row" style="padding-top: 100px;">
			<div class="col-xs-12 col-sm-12  col-md-6 col-md-offset-3">
				<div class="heading text-center">
					<h2>LIST COURSES</h2>
                    <h2>OF {{$city->name}}</h2>
				</div>
			</div>
		</div><!-- .row end -->
		<div class="row">
			<!-- Team Member #1 -->
            @foreach($courses as $course)
    			<div class="col-xs-12 col-sm-4 col-md-4">
    				<div class="team-member">
    					<div class="member-img" style="height: 300px;">
    						<img class="img-responsive" style="max-height: 100%;" src="{{asset('admin/images/course/'.$course->image)}}" alt="author">
    					</div>
    					<div class="member-info">
    						<h3><a href="{{url('listclass_is_course/'.$course->id)}}">{{$course->name}}</a></h3>
    						<div class="member-job">Digital Artist</div>
    						<div class="member-bio">Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis. Duis sed odio sit amet nibh vulputate cursus.</div>
    					</div>
    				</div>
    			</div><!-- .col-md-6 end -->
            @endforeach


		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #team3 end -->
@stop
