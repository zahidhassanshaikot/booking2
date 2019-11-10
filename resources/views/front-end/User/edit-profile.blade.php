@extends('front-end.master')
@section('title')
    Profile
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="panel">
                <div class="panel-body">
                    {{ Form::open(['route'=>'update-user-info', 'method'=>'POST', 'class'=>'animated wow zoomIn','data-wow-delay'=>".5s"]) }}
                    <table class="table table-responsive ">
                        <tr>
                            <th>First Name</th>
                            <td>
                                <input class="form-control" type="text" name="first_name"
                                       value="{{ $userInfo->first_name }}">
                                <input class="form-control" type="hidden" name="id" value="{{ $userInfo->id }}">
                                <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                            </td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td><input class="form-control" type="text" name="last_name"
                                       value="{{ $userInfo->last_name }}"></td>
                        </tr>
                        <tr>
                            <th>Phone NO</th>
                            <td><input class="form-control" value="{{ $userInfo->phone_no }}" name="phone_no"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><input class="form-control" type="text" name="address" value="{{ $userInfo->address }}">
                            </td>
                        </tr>
                        <tr>
                            <th>NID</th>
                            <td><input class="form-control" type="text" name="national_id"
                                       value="{{ $userInfo->national_id }}"></td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td><input class="form-control" type="email" name="email_address"
                                       value="{{ $userInfo->email_address }}"></td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><input class="btn btn-warning" type="submit" name="btn" value="Update Profile"></td>
                        </tr>
                    </table>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection