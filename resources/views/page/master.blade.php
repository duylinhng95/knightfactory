<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <!-- Document Meta
        ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Landing page html5 template">
    <link href="{{asset('assets/images/favicon/favicon.ico')}}" rel="icon">

    <!-- Fonts
        ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CComfortaa:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
        ============================================= -->
    <link href="{{asset('assets/css/external.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
          <script src="assets/js/html5shiv.js"></script>
          <script src="assets/js/respond.min.js"></script>
        <![endif]-->

    <!-- Document Title
        ============================================= -->
    <title>Interact | Multi-purpose Landing Page Html5 Template</title>
</head>
<body>
    <div class="preloader">
    	<div class="sk-cube-grid">
    		  <div class="sk-cube sk-cube1"></div>
    		  <div class="sk-cube sk-cube2"></div>
    		  <div class="sk-cube sk-cube3"></div>
    		  <div class="sk-cube sk-cube4"></div>
    		  <div class="sk-cube sk-cube5"></div>
    		  <div class="sk-cube sk-cube6"></div>
    		  <div class="sk-cube sk-cube7"></div>
    		  <div class="sk-cube sk-cube8"></div>
    		  <div class="sk-cube sk-cube9"></div>
    	</div>
    </div>
    <!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">


        @include('page.partials.header')

        @yield('content')

        @include('page.partials.footer')



    </div><!-- #wrapper end -->

    <!-- Footer Scripts
    ============================================= -->
    <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
</body>
</html>
