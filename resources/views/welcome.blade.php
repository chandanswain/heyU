@extends('layouts.index')

@section('content')

<div class="col-md-6 sidebanner">
    <img src="{{ asset('assets/images/sidebanner1.jpg') }}"/>
</div>
<div class="col-md-6">
    <div class="secondlogo">
        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo2.png') }}"/></a>
    </div>
    {!! Form::open(['url' => 'login','method' => 'post']) !!}
        <div class="email">

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="col-sm-8">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email Address">
                    </div>
                    <div class="col-sm-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="col-sm-8">
                        <input id="password" type="password" name="password" placeholder="Password" style="background-color: #e9ebee;">
                    </div>
                    <div class="col-sm-4 {{ $errors->has('password') ? ' has-error' : '' }}">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class=" col-sm-12">
                    <div class="checkbox">
                        <input type="checkbox" name="remember" style="width: 2.5%;margin-left: 13%;"> Stay signed in
                    </div>
                </div>
            </div>

            <input type="submit" class="sub" value="Sign in">
        </div>
    {!! Form::close() !!}
    <ul class="link1">
        <li><a href="{{ url('/password/reset') }}">Can't access you account?</a></li>
        <li><a href="{{ url('/register') }}">Sign up for a new account</a></li>
    </ul>
</div>

@endsection
