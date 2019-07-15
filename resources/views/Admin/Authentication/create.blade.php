@extends('layouts.backend.backAuth.master')
@section('d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12')
    <div class="login-register-form-wrap">

        <div class="content">
            <h1>{{$title}}</h1>
        </div>

        <div class="login-register-form">
            <form action="{{route('registration.store')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    @include('Admin.Authentication._form')
                    <div class="col-12 mt-10"><button class="button button-primary button-outline">Create</button></div>
                </div>
            </form>

        </div>
    </div>

@endsection