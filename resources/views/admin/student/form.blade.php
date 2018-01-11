{{ csrf_field() }}
<div class="form-group">
	{!! Form::label('firstname','Firstname') !!} 
	<div class="form-controls {{ $errors->has('firstname') ? 'has-error' : '' }}">
		{!! Form::text('firstname',null,['class'=>'form-control','placeholder'=>'Gerald']) !!}
		@if ( $errors->has('firstname') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('firstname') }}</strong>
		    </span>
  		@endif	
	</div>
	{!! Form::label('lastname','Lastname') !!} 
	<div class="form-controls {{ $errors->has('lastname') ? 'has-error' : '' }}">
		{!! Form::text('lastname',null,['class'=>'form-control','placeholder'=>'Fisher']) !!}
		@if ( $errors->has('firstname') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('lastname') }}</strong>
		    </span>
  		@endif	
	</div>
	{!! Form::label('email','Email address') !!} 
	<div class="form-controls {{ $errors->has('email') ? 'has-error' : '' }}">
		{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'example@email.com']) !!}
		@if ( $errors->has('email') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('email') }}</strong>
		    </span>
  		@endif	
	</div>	
	{!! Form::label('phone','Phone number') !!} 
	<div class="form-controls {{ $errors->has('phone') ? 'has-error' : '' }}">
		{!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'0123456789']) !!}
		@if ( $errors->has('phone') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('phone') }}</strong>
		    </span>
  		@endif	
	</div>	
	{!! Form::label('password','Password') !!} 
	<div class="form-controls {{ $errors->has('password') ? 'has-error' : '' }}">
		{!! Form::password('password',['class'=>'form-control']) !!}
		@if ( $errors->has('password') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('password') }}</strong>
		    </span>
  		@endif	
	</div>	
	{!! Form::label('password_confirmation','Password Confirmation') !!} 
	<div class="form-controls {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
		{!! Form::password('password_confirmation',['class'=>'form-control']) !!}
		@if ( $errors->has('password_confirmation') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('password_confirmation') }}</strong>
		    </span>
  		@endif	
	</div>
</div>
{!! Form::submit('Submit',['class'=>'btn btn-default']) !!}