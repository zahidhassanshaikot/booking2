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

                <li class="active"><a href="">Single Page</a></li>

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
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="text-center text-danger" id="message"> {{ Session::get('msg') }}</h4>
                        @if (isset($errors) && count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ Form::open(['route'=>'save-post-booking-transactionId', 'method'=>'POST']) }}

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Transaction Id</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="transection_id" class="form-control" placeholder="Transaction Id">
                                        <input type="hidden" value="{{ $postData->post_id }}" name="post_id">
                                        <input type="hidden" value="{{ $postData->start_date }}" name="start_date">
                                        <input type="hidden" value="{{ $postData->end_date }}" name="end_date">
                                        <input type="hidden" value="{{ $postData->total_amount }}" name="total_amount">
                                        <input type="hidden" value="{{ $postData->booking_amount }}" name="booking_amount">
                                </div>
                            </div>
                        </div>



                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success btn-block" value="Submit Now">
                            </div>
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>

            </div>
            </div>
        </div>

    </div>


@endsection