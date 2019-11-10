@extends('admin.master')

@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class=" panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="message"> {{ Session::get('message') }}</h3>
                    <table class="table table-bordered">
                        <tr class="bg-info">
                            <th>SL no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($contactMessages as $contactMessage)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $contactMessage-> name}}</td>
                                <td>{{ $contactMessage-> email_address}}</td>
                                <td>{{ $contactMessage-> phone_no}}</td>
                                <td>{{ $contactMessage-> message}}</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>
                                    <a href="{{ route('delete-contact-message',['id'=>$contactMessage->id]) }}" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $contactMessages->links() }}

                </div>

            </div>
        </div>
    </div>
</div>

@endsection