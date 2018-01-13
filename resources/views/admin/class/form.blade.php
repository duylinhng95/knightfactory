{!!csrf_field()!!}
<div class="form-group">
    {!! Form::label('category', 'Name of category') !!}
    <div class="form-controls {{ $errors->has('category') ? 'has-error' : '' }}">
        {!! Form::text('category',$category->name, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
        @if ( $errors->has('category') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('category') }} </strong>
            </span>
        @endif
    </div>
<div class="form-group">
    {!! Form::label('course_id', 'Name of course') !!}
    <div class="form-controls {{ $errors->has('course') ? 'has-error' : '' }}">
        {!! Form::text('course_id',$course->name, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
        @if ( $errors->has('course_id') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('course_id') }} </strong>
            </span>
        @endif
    </div>

<div class="form-group">
    {!! Form::label('speaker_id', 'Name of speaker') !!}
    <div class="form-controls {{ $errors->has('speaker') ? 'has-error' : '' }}">
        {!! Form::select('speaker_id',$speakers,null,['placeholder'=>'Select'])!!}
        @if ( $errors->has('speaker') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('speaker') }} </strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::label('city_id', 'Name of city') !!}
    <div class="form-controls {{ $errors->has('city') ? 'has-error' : '' }}">
        {!! Form::select('city_id', $cities,null,['placeholder'=>'Select']) !!}
        @if ( $errors->has('city') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('city') }} </strong>
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
    <div class="form-controls {{ $errors->has('startdate') ? 'has-error' : '' }}">
        {!! Form::date('start_date', null, ['class'=>'form-control']) !!}
        @if ( $errors->has('startdate') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('startdate') }} </strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('end_date', 'End date') !!}
    <div class="form-controls {{ $errors->has('enddate') ? 'has-error' : '' }}">
        {!! Form::date('end_date', null, ['class'=>'form-control']) !!}
        @if ( $errors->has('enddate') )
            <span style="color: red;" class="text-warning">
                <strong> {{ $errors->first('enddate') }} </strong>
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
