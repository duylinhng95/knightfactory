{{ csrf_field() }}
<div class="form-group">
	{!! Form::label('firstname','Firstname') !!}
	<div class="form-controls {{ $errors->has('firstname') ? 'has-error' : '' }}">
		{!! Form::text('firstname',null,['class'=>'form-control','placeholder'=>'Your First Name*']) !!}
		@if ( $errors->has('firstname') )
		    <span style="color: red;" class="text-warning">
		        <strong> {{ $errors->first('firstname') }}</strong>
		    </span>
  		@endif
	</div>
	{!! Form::label('lastname','Lastname') !!}
	<div class="form-controls {{ $errors->has('lastname') ? 'has-error' : '' }}">
		{!! Form::text('lastname',null,['class'=>'form-control','placeholder'=>'Your Last Name*']) !!}
		@if ( $errors->has('firstname') )
		    <span style="color: red;" class="text-warning">
		        <strong> {{ $errors->first('lastname') }}</strong>
		    </span>
  		@endif
	</div>
	{!! Form::label('email','Email address') !!}
	<div class="form-controls {{ $errors->has('email') ? 'has-error' : '' }}">
		{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email Address*']) !!}
		@if ( $errors->has('email') )
		    <span style="color: red;" class="text-warning">
		        <strong> {{ $errors->first('email') }}</strong>
		    </span>
  		@endif
	</div>
	{!! Form::label('phone','Phone number') !!}
	<div class="form-controls {{ $errors->has('phone') ? 'has-error' : '' }}">
		{!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Your Phone Number* ']) !!}
		@if ( $errors->has('phone') )
		    <span style="color: red;" class="text-warning">
		        <strong> {{ $errors->first('phone') }}</strong>
		    </span>
  		@endif
	</div>
	{!! Form::label('password','Password') !!}
	<div class="form-controls {{ $errors->has('password') ? 'has-error' : '' }}">
		{!! Form::password('password',['class'=>'form-control']) !!}
		@if ( $errors->has('password') )
		    <span style="color: red;" class="text-warning">
		        <strong> {{ $errors->first('password') }}</strong>
		    </span>
  		@endif
	</div>
</div>
{!! Form::submit('Submit',['class'=>'btn btn-default']) !!}
