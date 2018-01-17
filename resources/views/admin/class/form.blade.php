{!!csrf_field()!!}

<div class="form-group">
    {!! Form::label('course_id', 'Name of course') !!}
    <div class="form-controls {{ $errors->has('course') ? 'has-error' : '' }}">
        {!! Form::select('course_id', $course,null, ['placeholder'=>'Select']) !!}
        @if ( $errors->has('course_id') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('course_id') }} </strong>
            </span>
        @endif
    </div>

<div class="form-group">
    {!! Form::label('speaker_id', 'Name of speaker') !!}
    <div class="form-controls {{ $errors->has('speaker_id') ? 'has-error' : '' }}">
        {!! Form::select('speaker_id', $speakers,null,['placeholder'=>'Select'])!!}
        @if ( $errors->has('speaker_id') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('speaker_id') }} </strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::label('city_id', 'Branch') !!}
    <div class="form-controls {{ $errors->has('city_id') ? 'has-error' : '' }}">
        {!! Form::select('city_id', $cities,null,['placeholder'=>'Select']) !!}<br>
        @if ( $errors->has('city_id') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('city_id') }} </strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('name', 'Name of class') !!}
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
    {!! Form::label('start_date', 'Start date') !!}
    <div class="form-controls {{ $errors->has('start_date') ? 'has-error' : '' }}">
        {!! Form::date('start_date', null, ['class'=>'form-control']) !!}
        @if ( $errors->has('start_date') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('start_date') }} </strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('end_date', 'End date') !!}
    <div class="form-controls {{ $errors->has('end_date') ? 'has-error' : '' }}">
        {!! Form::date('end_date', null, ['class'=>'form-control']) !!}
        @if ( $errors->has('end_date') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('end_date') }} </strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    <div class="form-controls {{ $errors->has('description') ? 'has-error' : '' }}">
        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        @if ( $errors->has('description') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('description') }} </strong>
            </span>
        @endif
    </div>
</div>
{!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}
