
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('/')}}/front-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/')}}/front-end/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="{{asset('/')}}/front-end/js/jquery.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="{{asset('/')}}/front-end/js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{asset('/')}}/front-end/js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- timer -->
    <link rel="stylesheet" href="{{asset('/')}}/front-end/css/jquery.countdown.css" />
    <!-- //timer -->
    <!-- animation-effect -->
    <link href="{{asset('/')}}/front-end/css/animate.min.css" rel="stylesheet">
    <script src="{{asset('/')}}/front-end/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
    <script src="{{ asset('/') }}admin/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('/') }}admin/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{ asset('/') }}admin/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

</head>

<body>
<!-- header -->
    @include('front-end.includes.header')
<!-- //header -->
<!-- banner -->
    @yield('body')

<!-- footer -->
    @include('front-end.includes.footer')
<!-- //footer -->
<script>
    initSample();
</script>

</body>
</html>