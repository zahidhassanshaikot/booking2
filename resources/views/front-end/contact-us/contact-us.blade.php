@extends('front-end.master')
@section('title')
    contact us
@endsection
@section('body')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{ route('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Contact Us</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <h3 class="text-center text-success" id="xyz">{{ Session::get('msg') }}</h3>
    <!-- mail -->
    <div class="mail animated wow zoomIn" data-wow-delay=".5s">
        <div class="container">
            <h3>Contact Us</h3>
            <p class="est"></p>
            <div class="mail-grids">
                <div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                    {{ Form::open(['route'=>'contact-message', 'method'=>'POST']) }}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email_address" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone_no" class="form-control" placeholder="Phone No">
                    </div>
                    <div class="form-group">
                        <textarea type="text" rows="4" name="message" class="form-control"
                                  placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit Now">
                    </div>
                    {{ Form::close() }}
                </div>
                <div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
                    <div class="mail-grid-right1">
                        {{--<img src="images/3.png" alt=" " class="img-responsive" />--}}
                        <h4>zzzz hhhhh sssssss <span>Manager</span></h4>
                        <ul class="phone-mail">
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: +880 0000 000 000</li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:zzz@gmail.com">zzz@gmail.com</a></li>
                        </ul>
                        <ul class="social-icons">
                            <li><a href="#" class="facebook"></a></li>
                            <li><a href="#" class="twitter"></a></li>
                            <li><a href="#" class="g"></a></li>
                            <li><a href="#" class="instagram"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.850719876481!2d90.39277511440805!3d23.75270219460665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a2adc9622f%3A0x308a42a16fb2beb6!2sBdjobs.com+Ltd.!5e0!3m2!1sbn!2sbd!4v1518473036345" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div>
    <!-- //mail -->

@endsection