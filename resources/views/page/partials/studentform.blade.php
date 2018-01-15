{{ csrf_field() }}
<div class="form-group">
	<div class="form-controls {{ $errors->has('firstname') ? 'has-error' : '' }}">
		{!! Form::text('firstname',null,['class'=>'form-control','placeholder'=>'Your First Name*']) !!}
		@if ( $errors->has('firstname') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('firstname') }}</strong>
		    </span>
  		@endif	
	</div>
	<div class="form-controls {{ $errors->has('lastname') ? 'has-error' : '' }}">
		{!! Form::text('lastname',null,['class'=>'form-control','placeholder'=>'Your Last Name*']) !!}
		@if ( $errors->has('firstname') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('lastname') }}</strong>
		    </span>
  		@endif	
	</div>
	<div class="form-controls {{ $errors->has('email') ? 'has-error' : '' }}">
		{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email Address*']) !!}
		@if ( $errors->has('email') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('email') }}</strong>
		    </span>
  		@endif	
	</div>	
	<div class="form-controls {{ $errors->has('phone') ? 'has-error' : '' }}">
		{!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Your Phone Number* ']) !!}
		@if ( $errors->has('phone') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('phone') }}</strong>
		    </span>
  		@endif	
	</div>	
	<div class="form-controls {{ $errors->has('password') ? 'has-error' : '' }}">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>'Your Password*']) !!}
		@if ( $errors->has('password') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('password') }}</strong>
		    </span>
  		@endif	
	</div>	
	<div class="form-controls {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
		{!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Password Confirmation*']) !!}
		@if ( $errors->has('password_confirmation') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('password_confirmation') }}</strong>
		    </span>
  		@endif	
	</div>
</div>
{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}