
    <div class="head">
        <div class="container">
            <div class="header-grid">
                <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                    <ul>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
                        @if(Session::get('userId'))
                        @else
                            <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="{{ route('user-registration') }}">Register</a></li>

                        @endif
                        @if(Session::get('userId'))
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-user fa-fw glyphicon glyphicon-log-in"></i>Hi {{ Session::get('userName') }} <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="{{ route('app-user-profile') }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                    </li>
                                    {{-- <li class="divider"></li> --}}
                                    <li><a href="{{ route('booking-request-status-by-user') }}">Your Booking status</a></li>
                                    <li class="divider"></li>
                                    <li></i><a href="#" onclick="document.getElementById('userLogoutForm').submit();">Logout</a></li>
                                    {{ Form::open(['route'=>'user-logout', 'method'=>'POST', 'id'=>'userLogoutForm']) }}
                                    {{ Form::close() }}
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                        @else
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-user fa-fw glyphicon glyphicon-log-in"></i>Login <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="{{ route('user-login') }}">User Login</a></li>

                                    <li class="divider"></li>
                                    <li><a href="{{ route('admin-login') }}">Admin Login</a></li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>





                            {{--<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{ route('user-login') }}">Login</a></li>--}}
                        @endif


                    </ul>
                </div>
                <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
                    <ul class="social-icons">
                        <li><a href="#" class="facebook"></a></li>
                        <li><a href="#" class="twitter"></a></li>
                        <li><a href="#" class="g"></a></li>
                        <li><a href="#" class="instagram"></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="logo-nav">
                <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                    <h1><a href="{{ asset('/') }}"> V-Booking <span>Booking anywhere</span></a></h1>
                </div>
                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{ route('/') }}" class="act">Home</a></li>
                                <!-- Mega Menu -->

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-1">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Categories</h6>
                                                    
                                                    <li><a href="{{ route('type-post',['type'=>'corporate']) }}">Corporate</a></li>
                                                    <li><a href="{{ route('type-post',['type'=>'personal']) }}">Personal</a></li>
                                                    <li><a href="{{ route('customize-booking') }}">Customize</a></li>
                                                
                                                </ul>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                            

                                <li><a href="{{ route('about-us') }}">About us</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="logo-nav-right">
                    <div class="search-box">
                        <div id="sb-search" class="sb-search">
                            {{--<form>--}}
                            {{ Form::open(['route'=>'search-post','method'=>'POST', 'class'=>'form-horizontal animated wow zoomIn','data-wow-delay'=>".5s"]) }}

                            <input class="sb-search-input" name="search" placeholder="Search by location" type="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                            {{--<input type="submit" value="submit">--}}
                                <span class="sb-icon-search"> </span>
                            {{ Form::close() }}
                        </div>
                    </div>
                    <!-- search-scripts -->
                    <script src="{{asset('/')}}/front-end/js/classie.js"></script>
                    <script src="{{asset('/')}}/front-end/js/uisearch.js"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    <!-- //search-scripts -->
                </div>
                <div class="header-right">
                    
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>