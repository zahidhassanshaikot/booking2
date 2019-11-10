@extends('front-end.master')
@section('title')
    Profile
@endsection
@section('body')
<div class="container">
    <div class="row">
        <h3 class="text-center text-success"> {{ Session::get('message') }}</h3>
        <div class="panel">
            <div class="panel-body">
                <table class="table table-responsive ">
                    <tr>
                        <th>Full Name</th>
                        <td>{{ $userInfo->first_name }} {{ $userInfo->last_name }}</td>
                    </tr>
                    <tr>
                        <th>Phone NO</th>
                        <td>{{ $userInfo->phone_no }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $userInfo->address }}</td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>{{ $userInfo->email_address }}</td>
                    </tr>

                    <tr>
                        <th></th>
                        <td><a href="{{ route('edit-user-info',['id'=>$userInfo->id]) }}" class="btn btn-warning">Edit</a>||<a href="{{ route('/') }}" class="btn btn-primary">Home</a></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection