@extends('layouts.backend.master')
@section('content-body')
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">{{$title}}</h4><br>
                <a href="{{route('doctor.create')}}" class="button button-outline button-success" ><span>Add New</span></a>
            </div>
            <div class="box-body">
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                    <tr>
                        <th>{{$serial++}}</th>
                        <td>
                            <span class="avatar">
                                <img src="{{asset($doctor->doctor_image)}}" alt="">
                            </span>
                        </td>
                        <td>{{$doctor->doctor_name}}</td>
                        <td>{{$doctor->doctor_position}}</td>
                        <td>{{$doctor->doctor_email}}</td>
                        <td>{{$doctor->doctor_phone}}</td>
                        <td>
                            <div class="box-body">
                                <div class="dropdown">
                                    <button class="button button-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="button button-dropbox dropdown-item" href="{{route('doctor.edit',$doctor->id)}}"><i class="fa fa-edit " aria-hidden="true"></i>Edit</a>
                                        <form method="post" action="{{route('doctor.destroy',$doctor->id)}}">
                                            @csrf
                                            @method('delete')
                                            <button class="button button-youtube dropdown-item" onclick="return confirm('Are you sure to Delete this Doctor')"><i class="zmdi zmdi-delete zmdi-hc-fw"></i><span>Delete</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection