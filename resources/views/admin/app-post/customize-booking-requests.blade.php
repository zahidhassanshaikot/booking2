@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class=" panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center">Customzie Booking Request</h3>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success" id="message"> {{ Session::get('msg') }}</h3>

                    <table class="table table-responsive">
                        <tr>
                            <th>Image</th>
                            <th>Customer Name</th>
                            <th>Customer Phone No</th>
                            <th>Customer Email</th>
                            <th>Place Name</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        @foreach($customizeBookingStatuses as $bookingStatus)
                            <tr>
                                <td><img src="{{ asset($bookingStatus->image) }}" alt="img" height="60px" width="60px"></td>
                                <td>{{$bookingStatus->first_name}}</td>
                                <td>{{$bookingStatus->phone_no}}</td>
                                <td>{{$bookingStatus->email_address}}</td>
                                <td>{{$bookingStatus->address}}</td>
                                <td>{{$bookingStatus->status}}</td>
                                
                                <td>{{$bookingStatus->start_date}} to {{$bookingStatus->end_date}}</td>
                            
                                <td>

                                    @if($bookingStatus->status!='Checkout')
                                        
                                            <a href="{{ route('customizeBooking-status-change',['id'=>$bookingStatus->id,'status'=>'Accept']) }}"
                                               title="Accept Request" class="btn btn-info btn-xs">
                                                <span class="fa fa-check"></span>
                                            </a> 
                                                <a href="{{ route('customizeBooking-status-change',['id'=>$bookingStatus->id,'status'=>'Reject']) }}"
                                                   title="Reject Request" class="btn btn-warning btn-xs">
                                                    <span class="fa fa-ban"></span>
                                                </a> 
                                                <a href="{{ route('customizeBooking-status-change',['id'=>$bookingStatus->id,'status'=>'Waiting']) }}"
                                                   title="Waiting Request" class="btn btn-info btn-xs">
                                                    <span class="fa fa-hourglass"></span>
                                                </a> 
                                        @endif
                                        
                                            <a href="{{ route('customizeBooking-status-change',['id'=>$bookingStatus->id,'status'=>'Checkout']) }}"
                                               title="Checkout" class="btn btn-success btn-xs">
                                                <span class="fa fa-hourglass-end"> Checkout</span>
                                            </a>
                                        
                                   
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>

            </div>
        </div>
    </div>

@endsection