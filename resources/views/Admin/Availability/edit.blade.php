@extends('layouts.backend.master')
@section('content-body')
    <div class="row">
        <!--Form controls Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 style="position: relative; left: 440px" class="title">{{$title}}</h3>
                    </div>
                    <div class="box-body">
                        <div class="row mbn-20">
                            <!--Form Field-->
                            <div class="col-lg-4 col-12 mb-20">
                                <div style="position: relative; left: 340px" class="row mbn-15">
                                    <form action="{{route('availability.update', $availability->id)}}" method="post">
                                        @csrf
                                        @method('put')
                                        @include('Admin.Availability._form')
                                        <button style="position: relative; left: 125px" type="submit" class="button button-outline button-primary"><span>Update</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Form controls End-->
    </div>
@endsection