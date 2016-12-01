@extends('layouts.index')

@section('content')

    <div class="signup-area">
        <div class="clear">
            <div class="col-sm-6 text-center login-bg"><img src="{{ asset('assets/img/home-bg.png') }}"></div>
            <div class="col-sm-6 register-area boxShadow">
                <div class="text-center logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" /></a>
                </div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class=" col-sm-11">
                    <div class="form-group">

                        <div class="col-sm-6 {{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">

                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-6 {{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">

                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email id">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-6 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="calender" class="form-control" id="password" name="dob" placeholder="Date of birth">
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <div class="col-sm-6">
                                <span class="radioLabel">Gender</span>
                                <label class="radiobt">
                                    <input type="radio" name="gender" value="M" checked >Male</label>
                                <label class="radiobt">
                                    <input type="radio" name="gender" value="F">Female</label>
                            </div>

                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-group">
                        <div class=" col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="agree_terms_condition" checked> I Agree Terms & privacy</label>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info btn-md">Create Account</button>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
