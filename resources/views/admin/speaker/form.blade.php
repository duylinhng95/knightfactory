{{ csrf_field() }}
<div class="form-group">
	{!! Form::label('name','Name of Speaker') !!} 
	<div class="form-controls {{ $errors->has('name') ? 'has-error' : '' }}">
		{!! Form::text('name',null,['class'=>'form-control']) !!}
		@if ( $errors->has('name') )
		    <span class="text-warning">
		        <strong> {{ $errors->first('name') }}</strong>
		    </span>
  		@endif	
	</div>
	{!! Form::label('description','Description of Speaker') !!}
	<div class="form-controls {{$errors->has('description') ? 'has-error' : ''}}">
		{!! Form::text('description',null,['class'=>'form-control']) !!}
		@if( $errors->has('description'))
			<span class="text-warning">
				<strong>{{$errors->first('description')}}</strong>
			</span>
		@endif
	</div>
	{!! Form::label('avatar','Avatar of Speaker') !!}
	<div class="form-controls {{ $errors->has('avatar') ? 'has-error' : '' }}">
		{!! Form::file('avatar',null,['class'=>'form-control']) !!}
		@if ($errors->has('avatar'))
			<span class="text-warning">
				<strong> {{ $errors->first('avatar') }}</strong>
			</span>
		@endif
	</div>
</div>
{!! Form::submit('Submit',['class'=>'btn btn-default']) !!}