@extends('layouts.app')

@section('content')

    <div class="col-sm-6 text-center login-bg"><img src="{{ asset('assets/img/home-bg.png') }}"></div>
    <div class="col-sm-6 register-area boxShadow">
        <div class="text-center logo">
            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" /></a>
        </div>

        <div class="text-center">
            <span><h4>Sign in to your account</h4></span>
        </div>
        <br>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class=" col-sm-12">
                <div class="form-group">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-8 {{ $errors->has('email') ? ' has-error' : '' }} ">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="form-group">

                    <div class="col-sm-2 ">
                    </div>
                    <div class="col-sm-8 {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="clear"></div>
                </div>


                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class=" col-sm-8">
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Stay signed in</label>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-info btn-md contenerWidth100">Sign in</button>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="form-group">
                    <div class=" col-sm-12 text-center">
                        <a href="{{ url('/password/reset') }}">Can't access you account?</a>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="form-group">
                    <div class=" col-sm-12 text-center">
                        <a href="{{ url('/register') }}">Sign up for a new account</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </form>
    </div>
@endsection
