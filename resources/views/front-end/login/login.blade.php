@extends('front-end.master')
@section('title')
    login
@endsection
@section('body')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{ route('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Login Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <!-- login -->
    <div class="login">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Login Form</h3>
            <h2 class="text-center text-danger">{{ Session::get('message') }}</h2>
            <br/>
            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                {{ Form::open(['route'=>'user-login-check', 'method'=>'POST', 'class'=>'form-horizontal animated wow zoomIn','data-wow-delay'=>".5s", 'enctype'=>'multipart/form-data']) }}
                <input type="email" name="email_address" placeholder="Email Address" >
                    <input type="password" name="password" placeholder="Password" >
                    <div class="forgot">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <input type="submit" name="btn" value="Login">
                {{--</form>--}}
                {{ Form::close() }}
            </div>
            <h4 class="animated wow slideInUp" data-wow-delay=".5s">For New People</h4>
            <p class="animated wow slideInUp" data-wow-delay=".5s"><a href="register.html">Register Here</a> (Or) go back to <a href="index.html">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
        </div>
    </div>
    <!-- //login -->

@endsection