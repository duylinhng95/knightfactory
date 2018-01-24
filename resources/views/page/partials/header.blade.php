<header id="navbar-spy" class="header-onepage">
    <nav id="primary-menu" class="navbar navbar-fixed-top style-1 affix-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="logo" href="index.html">
                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo KF">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active">
                        <a data-scroll="scrollTo" href="#home_id">home</a>
                    </li>
                    <li>
                        <a data-scroll="scrollTo" href="#aboutus_id">About us</a>
                    </li>
                    <li class="mn_city">
                         <a data-scroll="scrollTo" href="#branch_id" >Branch</a>
                         <ul class="mn_list_city">
                             @foreach($cities as $city)
                                 <li style="boder-bottom: 1px solid black;"><a href="{{ url('listcourse_is_branch')}}/{{$city->id}}">{{$city->name}}</a></li>
                             @endforeach
                         </ul>
                     </li>
                    <li>
                        <a data-scroll="scrollTo" href="#speker_id">Speakers</a>
                    </li>
                    @if(Session::has('student'))
                    <li>
                        <a href="{{route('logout-student')}}">Sign out</a>
                    </li>
                    @else
                    <li>
                        <a href="login.php" class="overlayLink" data-action="login-form.html">Sign in</a>
                    </li>
                    @endif                                        
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>
