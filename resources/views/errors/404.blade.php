@extends('page.master')
@section('content')
<body>
    <div class="container" style="text-align: center;">
        <h1 style="color: red;">404 <br>Not Found</h1>
        <h2>Sorry !<br>
        The system can not find the request .</h2>
        <h3>Back <a href="{{ url('/')}}">Home</a></h3>
    </div>
</body>
@stop
