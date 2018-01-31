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
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Hello, <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="{{url('administrator/user/profile')}}"><i class="fa fa-user fa-fw"></i> Edit Profile</a>
                            </li>
                            <li><a href="{{url('administrator/user/changepass')}}"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{route('logout-student')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
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
