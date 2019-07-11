@extends('layouts.backend.backAuth.master')
@section('d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12')
    <div class="login-register-form-wrap">

        <div class="content">
            <h1>Forgot Password</h1>
            <p>Fill with your mail to receive instructions on how to reset your password.</p>
        </div>

        <div class="login-register-form">
            <form action="#">
                <div class="row">
                    <div class="col-12 mb-20"><input class="form-control" type="text" placeholder="User ID / Email"></div>
                    <div class="col-12 mt-10"><button class="button button-primary button-outline">Reset Password</button></div>
                </div>
            </form>
        </div>
    </div>
@endsection