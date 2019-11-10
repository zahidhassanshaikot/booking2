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

                <li class="active"><a href="{{ route('post-details', ['id'=>$postId]) }}">Single Page</a></li>

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

                    {{ Form::open(['route'=>'send-post-booking-request', 'method'=>'POST']) }}

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Name</label>
                        </div>
                        <div class="col-md-8">
                            <input title="You cannot edit it" disabled type="text" value="{{$userInfo->first_name}} {{$userInfo->last_name}}" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label>Email Address</label>
                    </div>
                    <div class="col-md-8">
                        <input disabled title="You cannot edit it" value="{{$userInfo->email_address}}" type="email" name="email" class="form-control" placeholder="email_address">
                    </div>
                </div>
            </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Phone No</label>
                </div>
                <div class="col-md-8">
                    <input disabled title="You cannot edit it" value="{{$userInfo->phone_no}}" type="text" name="phone_no" class="form-control" placeholder="Phone No">
                </div>
            </div>
        </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Date Time</label>
                        </div>
                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-5">
                                    <input type="datetime-local" name="start_date" class="form-control" placeholder="start_date">
                                </div>
                                <div class="col-md-2">
                                    <span>To</span>
                                </div>
                                <div class="col-md-5">
                                    <input type="datetime-local" name="end_date" class="form-control" placeholder="end_date">
                                    <input type="hidden" name="post_id" class="form-control" value="{{ $postId }}"
                                           placeholder="Post Id">
                                    <input type="hidden" name="customer_id" class="form-control" value="{{$userInfo->id}}"
                                           placeholder="customer_id">
                                    <input type="hidden" name="status" class="form-control" value="Waiting"
                                           placeholder="customer_id">
                                </div>
                            </div>
                        </div>
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
            {{--<div class="col-md-2">--}}
                {{--<div class="card-body">--}}
                    {{--<div class="">--}}
                        {{--<span class="" style="">Total No Of Room: </span>--}}
                    {{--</div>--}}
                    {{--<div>--}}
                        {{--<span>Total amount: </span><span class="" id="tAmount"></span>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>

    </div>
    {{--<script>--}}

        {{--// i = 0;--}}
        {{--// $(document).ready(function(){--}}
        {{--//     $("#no_of_room").keypress(function(){--}}
        {{--//         $("span").text(i += 1);--}}
        {{--//     });--}}
        {{--// });--}}



        {{--//--}}
        {{--// $(document).ready(function(){--}}
        {{--//     alert(hi);--}}
        {{--//     var $discount = $('#no_of_room'),--}}
        {{--//         $price = $(10),--}}
        {{--//         $newPrice = $('#tAmount');--}}
        {{--//--}}
        {{--//--}}
        {{--//     $discount.on('keypress', function(e) {--}}
        {{--//--}}
        {{--//         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){--}}
        {{--//             return false;--}}
        {{--//         }--}}
        {{--//         $newPrice.val(--}}
        {{--//                 ($price.val() -$discount.val()))--}}
        {{--//     });--}}
        {{--// });--}}



        {{--function nomOfRoom() {--}}

            {{--// var no_of_room = document.getElementById('no_of_room');--}}
            {{--var no_of_roo = $( "#no_of_room" ).val();--}}
            {{--console.log(no_of_roo);--}}
            {{--// var no_of_room2 = document.getElementById('no_of_room2').value;--}}
            {{--// var permin = parseFloat(no_of_room) + parseFloat(no_of_room2);--}}
            {{--//--}}
            {{--document.getElementById('no_of_room').value=no_of_roo;--}}

        {{--}--}}
    {{--</script>--}}

@endsection