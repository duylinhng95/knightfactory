{!!csrf_field()!!}
<div class="form-group">
    {!! Form::label('name', 'Name of Branch') !!}
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
<div class="form-group">
    {!! Form::label('description','Description of Branch') !!}
    <div class="form-controls {{$errors->has('description') ? 'has-error' : ''}}">
        {!! Form::text('description',null,['class'=>'form-control']) !!}
        @if( $errors->has('description'))
            <span class="text-warning">
                <strong>{{$errors->first('description')}}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('image','Picture of Branch') !!}
    <div class="form-controls {{ $errors->has('image') ? 'has-error' : '' }}">
        {!! Form::file('image',null,['class'=>'form-control', 'id' => 'image']) !!}<br>
        <img @if(isset($city)) src="{{asset('admin/images/city/image/'.$city->image)}}"  @endif alt="" id="image1" style="width: 100px; height: 100px;">
        @if ($errors->has('image'))
            <span class="text-warning">
                <strong> {{ $errors->first('image') }}</strong>
            </span>
        @endif
    </div>
</div>
{!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}
