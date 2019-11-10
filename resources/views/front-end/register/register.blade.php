@extends('front-end.master')
@section('title')
    Register
@endsection
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{ route('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Register Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- register -->
    <div class="register">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>

            <div class="login-form-grids">
                <h5 class="animated wow slideInUp" data-wow-delay=".5s">profile information</h5>
                {{ Form::open(['route'=>'new-user', 'method'=>'POST', 'class'=>'form-horizontal animated wow zoomIn','data-wow-delay'=>".5s", 'enctype'=>'multipart/form-data']) }}
                {{--<form class="animated wow slideInUp" data-wow-delay=".5s">--}}
                    <div class="form-group">
                        <input type="text" name="first_name" placeholder="First Name..." >
                        <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" placeholder="Last Name..." >
                        <span class="text-danger">{{ $errors->has('last_name') ? $errors->first('first_name') : ' ' }}</span>
                    </div>
                     <div class="form-group">
                        <input type="text" name="phone_no" placeholder="Phone NO..." >
                         <span class="text-danger">{{ $errors->has('phone_no') ? $errors->first('phone_no') : ' ' }}</span>
                    </div>
                <div class="form-group">
                    <input type="text" name="national_id" placeholder="National Id No" >
                    <span class="text-danger">{{ $errors->has('national_id') ? $errors->first('national_id') : ' ' }}</span>
                </div>
                     <div class="form-group">
                        <input type="text" name="address" placeholder="Address..." >
                         <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
                    </div>

                <h6 class="animated wow slideInUp" data-wow-delay=".5s">Login information</h6>

                    <div class="form-group">
                        <input type="email"name="email_address"  placeholder="Email Address"  >
                        <span class="text-danger">{{ $errors->has('email_address') ? $errors->first('email_address') : ' ' }}</span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password"  placeholder="Password"  >
                        <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirm_password"  placeholder="Password Confirmation" >
                        <span class="text-danger">{{ $errors->has('confirm_password') ? $errors->first('confirm_password') : ' ' }}</span>
                    </div>


                    <div class="register-check-box">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" value="1" name="checkbox"><i> </i>I accept the terms and conditions</label>
                            <span class="text-danger">{{ $errors->has('checkbox') ? $errors->first('checkbox') : ' ' }}</span>
                        </div>
                    </div>
                    <input type="submit" value="Register">
                {{--</form>--}}
                {{ Form::close() }}
            </div>
            <div class="register-home animated wow slideInUp" data-wow-delay=".5s">
                <a href="{{ route('/') }}">Home</a>
            </div>
        </div>
    </div>
    <!-- //register -->

@endsection