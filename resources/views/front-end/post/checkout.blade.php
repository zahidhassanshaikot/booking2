@extends('front-end.master')
@section('title')
    Post Details
@endsection
@section('body')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{ route('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
                </li>

                <li class="active">booking</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <br/>
    <!-- single -->
    <div class="new-collections">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="panel-heading bg-danger">
                        <p class="h2 text-info fa-bold text-center">Booking Summery</p>
                    </div>
                    <div class="panel-body bg-warning">
                        <h4 class="text-center text-danger" id="message"> {{ Session::get('msg') }}</h4>

                           <div class="row">
                                <div class="col-md-4">
                                    <label>Total Hour</label>
                                </div>
                                <div class="col-md-8">&nbsp;
                                    <span>{{ $hours }}</span><br/>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label>Total Amount(BDT)</label>
                                </div>
                                <div class="col-md-8">
                                    <span class="h3 text-warning">৳ {{ $totalPayable }}</span>&nbsp;<br/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Booking Amount(30%)</label>
                                </div>
                                <div class="col-md-8">
                                    <span class="h3 text-warning">৳ {{ $bookingAmount }}</span>&nbsp;<br/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Due Amount</label>
                                </div>
                                <div class="col-md-8">
                                    <span class="h3 text-warning">৳ {{ $totalPayable-$bookingAmount }}</span>&nbsp;<br/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Date</label>
                                </div>
                                <div class="col-md-8">
                                <span>{{ $postData->start_date }} </span><span> To </span>
                                <span> {{ $postData->end_date }}</span>&nbsp;<br/>   
                                </div>
                            </div>

                         
                    </div>

                </div>
                <div class="col-md-6 pull-left">
                    <div class="panel-heading panel-title bg-danger">
                        <p class="h2 text-info fa-bold text-center">Select Payment Method</p>
                    </div>
                    <div class="panel-body bg-warning">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                <span class="text-left">&nbsp;&nbsp;&nbsp; Mobile Banking</span>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"
                                         onclick="document.getElementById('fff').submit();">
                                <img src="{{ asset('/') }}/post-images/com.creativeappsbd.bkash_1.png" class="img-thumbnail">
                                    </a>
                                    <form action="{{ route('transection_id') }}" method="post" id="fff">
                                        <input type="hidden" value="{{ $postData->post_id }}" name="post_id">
                                        <input type="hidden" value="{{ $postData->start_date }}" name="start_date">
                                        <input type="hidden" value="{{ $postData->end_date }}" name="end_date">
                                        <input type="hidden" value="{{ $totalPayable }}" name="total_amount">
                                        <input type="hidden" value="{{ $bookingAmount }}" name="booking_amount">

                                        {{ csrf_field() }}
                                    </form>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                <img src="{{ asset('/') }}/post-images/dutch-bangla-bank-limited-atm,-katiadi.jpg" class="img-thumbnail">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                <img src="{{ asset('/') }}/post-images/61a4fe300840140c5affc61a9db82d4f_icon.png" class="img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p>&nbsp;&nbsp;&nbsp; International Method</p>
                                <div class="col-md-3">
                                    <a href="#">
                                <img src="{{ asset('/') }}/post-images/PP_Acceptance_Marks_for_LogoCenter_266x142.png" class="img-thumbnail">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                    <img src="{{ asset('/') }}/post-images/MasterCard-logo-1990.png" class="img-thumbnail">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                    <img src="{{ asset('/') }}/post-images/ojf8ed4taaxccncp6pcp.png" class="img-thumbnail">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
@endsection