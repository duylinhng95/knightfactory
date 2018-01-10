{!!csrf_field()!!}
<div class="form-group">
    {!! Form::label('name', 'Name of City') !!}
    <div class="form-controls {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        @if ( $errors->has('name') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('name') }} </strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('address', 'Address') !!}
    <div class="form-controls {{ $errors->has('address') ? 'has-error' : '' }}">
        {!! Form::text('address', null, ['class'=>'form-control']) !!}
        @if ( $errors->has('address') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('address') }} </strong>
            </span>
        @endif
    </div>
</div>
{!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}
