@extends('page.master')
@section('content')
<section id="hero" class="hero hero-9 bg-overlay bg-overlay-dark">
	<div class="bg-section" >
		<img src="assets/images/hero/hero-10.jpg" alt="Background"/>
	</div>
	<div class="container" style="padding-top: 0px;">
		<div class="row">			
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="hero-form">
					<h2 class="mb-0">Register</h2>
					<p class="mb-0">Become a member of Knight Factory</p>
						{!! Form::open(['url'=>'student/save']) !!}
                                        @include('page.partials.studentform')
                        {!! Form::close() !!}
				</div>
			</div><!-- .col-md-6 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #hero end -->
@stop