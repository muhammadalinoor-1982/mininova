@extends('layouts.backend.backAuth.master')
@section('d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12')
    <div class="login-register-form-wrap">

        <div class="content">
            <h1>{{$title}}</h1>
        </div>

        <div class="login-register-form">
            <form action="{{route('doctor.update',$doctor->id)}}" method="post" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    @method('put')
                    @include('Admin.Doctor._form')
                </div>
                <div class="row">
                    @include('Admin.Doctor._2ndform')
                    <div class="col-12 mt-10"><button class="button button-primary button-outline">Update</button></div>
                </div>
            </form>

        </div>
    </div>
@endsection