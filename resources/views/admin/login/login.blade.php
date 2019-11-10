
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/') }}/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}/admin/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="{{ asset('/') }}/admin/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{ asset('/') }}/admin/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="{{ asset('/') }}/admin/js/jquery-1.10.2.min.js"></script>
    <!--clock init-->
</head>
<body>
<!--/login-->

<div class="error_page">
    <!--/login-top-->

    <div class="error-top">
        {{--<h2 class="inner-tittle page">Admin Login</h2>--}}
        <div class="login">
            <h3 class="inner-tittle t-inner">Admin Login</h3>
            <div class="buttons login">
                <ul>
                    <li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
                    <li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <form role="form" action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <fieldset>
                    <div class="form-group">
                        <input class="form-control text" placeholder="E-mail" name="email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                        </label>
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
                    <div class="form-group">
                        <input type="submit" name="btn" value="Login" class="btn btn-success btn-block">
                    </div>

                </fieldset>
            </form>
        </div>


    </div>


    <!--//login-top-->
</div>

<!--//login-->
<!--footer section start-->
<div class="footer">
    <p>&copy Online To-let System</p>
</div>
<!--footer section end-->
<!--/404-->
<!--js -->
<script src="{{ asset('/') }}/admin/js/jquery.nicescroll.js"></script>
<script src="{{ asset('/') }}/admin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/') }}/admin/js/bootstrap.min.js"></script>
</body>
</html>