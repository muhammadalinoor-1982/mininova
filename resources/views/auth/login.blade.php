{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

                                {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

                                {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--@if (Route::has('password.request'))--}}
                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends('layouts.backend.backAuth.master')
@section('d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12')
    <div class="login-register-form-wrap">

        <div class="content">
                @if(session('message'))
                    <div class="text-center" style="margin: 0 0 20px 0; font-weight: 100; color: #00A9F0;">
                        <h4><span style="color: #0055ff" class="alert alert-outline-info">{{ session('message') }}</span></h4>
                    </div>
                @endif
            <div class="row"></div><br><br>
            <h1>Sign in</h1>
        </div>

        <div class="login-register-form">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 mb-20"><input class="form-control @error('email') is-invalid @enderror" name="email" type="email" id="email" value="{{old('email')}}" required autocomplete="email" autofocus placeholder="User ID / Email"></div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="col-12 mb-20"><input class="form-control @error('password') is-invalid @enderror" name="password" id="password" type="password" required autocomplete="current-password" placeholder="Password"></div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="col-12 mb-20"><label for="remember" class="adomx-checkbox-2"><input id="remember" type="checkbox"><i class="icon"></i>Remember.</label></div>
                    <div class="col-12">
                        <div class="row justify-content-between">
                            <div class="col-auto mb-15"><a href="{{route('admin.addforgotpassword')}}">Forgot Password?</a></div>
                            <div class="col-auto mb-15">Dont have account? <a href="{{route('registration.create')}}">Create Now.</a></div>
                        </div>
                    </div>
                    <div class="col-12 mt-10"><button class="button button-primary button-outline">{{ __('Login') }}</button></div>
                </div>
            </form>
        </div>
    </div>
@endsection


