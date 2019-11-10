@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class=" panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center">New Booking Request</h3>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success" id="message"> {{ Session::get('msg') }}</h3>
<form method="post" action="{{ route('search-request-by-date') }}">
    {{ csrf_field() }}
    <div class="row form-inline text-center">
    <input type="date" name="date" class="form-control"> <input type="submit" value="Search" class="btn btn-info">
    </div>
</form>
                    <br/>&nbsp;
                    <table class="table table-responsive">
                        <tr>
                            <th>Customer Name</th>
                            <th>Customer Phone No</th>
                            <th>Customer Email</th>
                            <th>Place Name</th>
                           
                            <th>Date</th>
                            <th>Paid</th>
                            
                            <th>Total Amount</th>
                            <th>Transection Id</th>

                            <th>Action</th>
                        </tr>
                        @foreach($bookingStatuses as $bookingStatus)
                            <tr>
                                <td>{{$bookingStatus->first_name}}</td>
                                <td>{{$bookingStatus->phone_no}}</td>
                                <td>{{$bookingStatus->email_address}}</td>
                                <td>{{$bookingStatus->name}}</td>
                                
                                <td>{{$bookingStatus->start_date}} to {{$bookingStatus->end_date}}</td>
                                <td>{{$bookingStatus->booking_amount}}</td>
                                
                                <td>{{$bookingStatus->total_amount}}</td>
                                <td>{{$bookingStatus->transection_id}}</td>

                                <td>

                                    @if($bookingStatus->status!='Checkout')
                                        @if($bookingStatus->status!='Accept')
                                            <a href="{{ route('booking-status-change',['id'=>$bookingStatus->id,'status'=>'Accept']) }}"
                                               title="Accept Request" class="btn btn-info btn-xs">
                                                <span class="fa fa-check"></span>
                                            </a>
                                            @if($bookingStatus->status!='Reject')
                                                <a href="{{ route('booking-status-change',['id'=>$bookingStatus->id,'status'=>'Reject']) }}"
                                                   title="Reject Request" class="btn btn-warning btn-xs">
                                                    <span class="fa fa-ban"></span>
                                                </a>
                                            @endif
                                            @if($bookingStatus->status!='Waiting')
                                                <a href="{{ route('booking-status-change',['id'=>$bookingStatus->id,'status'=>'Waiting']) }}"
                                                   title="Waiting Request" class="btn btn-info btn-xs">
                                                    <span class="fa fa-hourglass"></span>
                                                </a>
                                            @endif
                                        @endif

                                        @if($bookingStatus->status=='Accept')
                                            <a href="{{ route('booking-status-change',['id'=>$bookingStatus->id,'status'=>'Checkout']) }}"
                                               title="Checkout" class="btn btn-success btn-xs">
                                                <span class="fa fa-hourglass-end"></span>
                                            </a>
                                        @endif
                                    @endif
                                    <a href="{{ route('delete-booking-history',['id'=>$bookingStatus->id]) }}"
                                       title="Delete History" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
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