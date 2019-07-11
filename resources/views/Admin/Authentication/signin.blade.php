@extends('layouts.backend.backAuth.master')
@section('d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12')
    <div class="login-register-form-wrap">

        <div class="content">
            <h1>Sign in</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="login-register-form">
            <form action="#">
                <div class="row">
                    <div class="col-12 mb-20"><input class="form-control" type="text" placeholder="User ID / Email"></div>
                    <div class="col-12 mb-20"><input class="form-control" type="password" placeholder="Password"></div>
                    <div class="col-12 mb-20"><label for="remember" class="adomx-checkbox-2"><input id="remember" type="checkbox"><i class="icon"></i>Remember.</label></div>
                    <div class="col-12">
                        <div class="row justify-content-between">
                            <div class="col-auto mb-15"><a href="#">Forgot Password?</a></div>
                            <div class="col-auto mb-15">Dont have account? <a href="signup.php">Create Now.</a></div>
                        </div>
                    </div>
                    <div class="col-12 mt-10"><button class="button button-primary button-outline">sign in</button></div>
                </div>
            </form>
        </div>
    </div>
@endsection