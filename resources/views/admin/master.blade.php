<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/') }}admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/') }}admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/') }}admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('/') }}admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/') }}admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('/') }}admin/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('/') }}admin/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{ asset('/') }}admin/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
{{--    @include('admin.includes.header')--}}

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                @if(Auth::user()->hasRole('Super Admin'))
                    Super Admin
                @elseif(Auth::user()->hasRole('Manager'))
                    Manager
                @endif</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    @foreach($contact_messages as $message)
                    <li>
                        <a href="#">
                            <div>
                                <strong>{{$message->name}}</strong>
                                <span class="pull-right text-muted">
                                        <em>{{$message->created_at}}</em>
                                    </span>
                            </div>
                            <div>{{$message->message}}</div>
                        </a>
                    </li>
                    @endforeach
                    <li class="divider"></li>

                    <li>
                        <a class="text-center" href="{{url('/view/contact-us/message')}}">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }} <i class="fa fa-caret-down"></i>

                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" onclick="document.getElementById('logoutForm').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        <form action="{{ route('logout') }}" method="post" id="logoutForm">

                            {{ csrf_field() }}
                        </form>

                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>









    <!-- /.navbar-top-links -->
    @include('admin.includes.menu')

    <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        @yield('body')
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('/') }}admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/') }}admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/') }}admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('/') }}admin/vendor/raphael/raphael.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/morrisjs/morris.min.js"></script>
<script src="{{ asset('/') }}admin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('/') }}admin/dist/js/sb-admin-2.js"></script>

<script>
    $(document).ready(function () {
        $('#xyz').click(function () {
            $(this).text(' ');
        });
    });
</script>
<script>
    initSample();
</script>

</body>

</html>







