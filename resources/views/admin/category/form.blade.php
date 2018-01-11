{!!csrf_field()!!}
<div class="form-group">
    {!! Form::label('name', 'Name of Category') !!}
    <div class="form-controls {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        @if ( $errors->has('name') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('name') }} </strong>
            </span>
        @endif
    </div>
</div>
{!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}
