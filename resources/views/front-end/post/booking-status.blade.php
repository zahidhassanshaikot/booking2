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

        <div class="container-fluid">
          <div class="panel panel-default">
              <div onclick="btnToggleFunctionCustome()" class="panel-header btn btn-block" style="background-color: #d2e3e3">
                  <h5 class="h3 text-center">Customize Booking Request</h5>
              </div>
              <div id="IdToggleCustome" style="display: none" class="panel-body ">
                    <table class="table table-responsive">
                <tr>
                    <th>Image</th>
                    <th>Place Name</th>
                    
                    <th>Date</th>
                    <th>purpose</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach($customizeBookingStatuses as $bookingStatus)
                <tr>
                    <td><img src="{{ asset($bookingStatus->image) }}" alt="img" height="60px" width="60px"></td>
                    <td>{{$bookingStatus->address}}</td>
                    
                    <td>{{$bookingStatus->start_date}} to {{$bookingStatus->end_date}}</td>
                    <td>{{$bookingStatus->purpose}}</td>
                    <td></td>
                    <td>{{$bookingStatus->status}}</td>
                    <td>
                        <a href="#" title="Delete History" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
              </div>
          </div>
          <div class="panel panel-default">
              <div onclick="btnToggleFunctionWaiting()" class="panel-header btn btn-block" style="background-color: #d2e3e3">
                  <h5 class="h3 text-center">Waiting Booking Request</h5>
              </div>
              <div id="IdToggleWaiting" style="display: none" class="panel-body ">
                    <table class="table table-responsive">
                <tr>
                    <th>Place Name</th>
                    
                    <th>Date</th>
                    <th>Booking Amount</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach($bookingStatuses as $bookingStatus)
                <tr>
                    <td>{{$bookingStatus->name}}</td>
                    
                    <td>{{$bookingStatus->start_date}} to {{$bookingStatus->end_date}}</td>
                    <td>{{$bookingStatus->booking_amount}}</td>
                    <td>{{$bookingStatus->total_amount}}</td>
                    <td>{{$bookingStatus->status}}</td>
                    <td>
                        <a href="{{ route('delete-booking-history',['id'=>$bookingStatus->id]) }}" title="Delete History" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
              </div>
          </div>
            <div class="panel panel-default">
                <div onclick="btnToggleFunctionAccepted()" class="panel-header btn btn-block" style="background-color: #d2e3e3">
                    <h5 class="h3 text-center"> Accepted Booking Request</h5>
                </div>
                <div id="IdToggleAccept" style="display: none" class="panel-body ">

                    <table class="table table-responsive">
                        <tr>
                            <th>Place Name</th>
                            
                            <th>Date</th>
                            <th>Booking Amount</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($acceptedBookingStatuses as $bookingStatus)
                            <tr>
                                <td>{{$bookingStatus->name}}</td>
                                
                                <td>{{$bookingStatus->start_date}} to {{$bookingStatus->end_date}}</td>
                                <td>{{$bookingStatus->booking_amount}}</td>
                                <td>{{$bookingStatus->total_amount}}</td>
                                <td>{{$bookingStatus->status}}</td>
                                <td>
                                    <a href="{{ route('delete-booking-history',['id'=>$bookingStatus->id]) }}" title="Delete History" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div onclick="btnToggleFunctionCheckout()" class="panel-header btn btn-block" style="background-color: #d2e3e3">
                    <h5 class="h3 text-center"> Checkout Booking Request</h5>
                </div>
                <div id="IdToggleCheckout" style="display: none" class="panel-body ">

                    <table class="table table-responsive">
                        <tr>
                            <th>Place Name</th>
                            
                            <th>Date</th>
                            <th>Booking Amount</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($checkoutBookingStatuses as $bookingStatus)
                            <tr>
                                <td>{{$bookingStatus->name}}</td>
                                
                                <td>{{$bookingStatus->start_date}} to {{$bookingStatus->end_date}}</td>
                                <td>{{$bookingStatus->booking_amount}}</td>
                                <td>{{$bookingStatus->total_amount}}</td>
                                <td>{{$bookingStatus->status}}</td>
                                <td>
                                    <a href="{{ route('delete-booking-history',['id'=>$bookingStatus->id]) }}" title="Delete History" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div onclick="btnToggleFunctionReject()" class="panel-header btn btn-block" style="background-color: #d2e3e3">
                    <h5 class="h3 text-center"> Reject Booking Request</h5>
                </div>
                <div id="IdToggleReject" style="display: none" class="panel-body ">

                    <table class="table table-responsive">
                        <tr>
                            <th>Place Name</th>
                            
                            <th>Date</th>
                            <th>Booking Amount</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($rejectBookingStatuses as $bookingStatus)
                            <tr>
                                <td>{{$bookingStatus->name}}</td>
                                
                                <td>{{$bookingStatus->start_date}} to {{$bookingStatus->end_date}}</td>
                                <td>{{$bookingStatus->booking_amount}}</td>
                                <td>{{$bookingStatus->total_amount}}</td>
                                <td>{{$bookingStatus->status}}</td>
                                <td>
                                    <a href="{{ route('delete-booking-history',['id'=>$bookingStatus->id]) }}" title="Delete History" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <br/>&nbsp;
    </div>

    <script>

        function btnToggleFunctionReject() {
            $('#IdToggleReject').slideToggle(1000);

        }
        function btnToggleFunctionAccepted() {
            $('#IdToggleAccept').slideToggle(1000);

        }
        function btnToggleFunctionCheckout() {
            $('#IdToggleCheckout').slideToggle(1000);

        }
        function btnToggleFunctionWaiting() {
            $('#IdToggleWaiting').slideToggle(1000);

        }
        function btnToggleFunctionCustome() {
            $('#IdToggleCustome').slideToggle(1000);

        }
    </script>

@endsection