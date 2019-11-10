@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div onclick="btnToggleFunction()" class="panel-header btn btn-default btn-block">
                <h3 class="center"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp Add New User</h3>
            </div>
            <div id="IdAddNewUser" style="display: none" class="panel-body ">
                <br/>
                {{ Form::open(['route'=>'register-new-user', 'method'=>'POST', 'class'=>'form-horizontal']) }}
                {{--<form method="POST" action="{{ route('register-new-user') }}">--}}


                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text"
                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                               value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email"
                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password"
                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm"
                           class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" required>
                        <span class="text-danger">{{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : ' ' }}</span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right"></label>

                    <div class="col-md-6">
                        <input type="submit" name="btn" class="btn btn-primary btn-block"/>
                    </div>
                </div>

                {{--</form>--}}
                {{ Form::close() }}
            </div>
            <h3 class="text-center text-success" id="message"> {{ Session::get('message') }}</h3>
            <div class=" panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center">Manage List</h3>
                </div>
                <div class="panel-body">
                   <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>SL no</th>
                            <th>Name</th>
                            <th>Email</th>

                        </tr>
                        @php($i=1)
                        @foreach($userManagers as $userManager)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $userManager-> name}}</td>
                                <td>{{ $userManager-> email}}</td>

                            </tr>
                        @endforeach
                    </table>

                </div>

            </div>
        </div>
    </div>
    <script>

        function btnToggleFunction() {
            $('#IdAddNewUser').slideToggle(1000);
        }
    </script>
@endsection