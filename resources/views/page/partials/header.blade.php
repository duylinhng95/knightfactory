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
                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="Interact">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active">
                        <a data-scroll="scrollTo" href="#hero">home</a>
                    </li>
                    <li>
                        <a data-scroll="scrollTo" href="#featured5">About us</a>
                    </li>
                    <li>
                        <a data-scroll="scrollTo" href="#portfolio2">Courses</a>
                    </li>
                    <li>
                        <a data-scroll="scrollTo" href="#testimonials4">Speakers</a>
                    </li>
                    <li class="mn_category">
                        <a data-scroll="scrollTo" >Category</a>
                        <ul class="mn_list_category">
                            @foreach($categories as $category)
                                <li style="boder-bottom: 1px solid black;"><a href="#">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                    <li>
                        <a href="login.php" class="overlayLink" data-action="login-form.html">Sign in</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>
