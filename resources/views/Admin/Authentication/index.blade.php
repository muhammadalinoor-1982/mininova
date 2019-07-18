@extends('layouts.backend.master')
@section('content-body')
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">{{$title}}</h4><br>
                <a href="{{route('registration.create')}}" class="button button-outline button-success" ><span>Add New</span></a>
            </div>

                <div class="header-search-form">
                    <form>
                        <input name="search" type="text" value="{{request()->search}}" placeholder="Search Here">
                            <select class="form-control form-control-sm" name="staff_status" id="">
                                <option value="">Select</option>
                                <option @if(request()->staff_status == 'supervisor') selected @endif value="supervisor">Supervisor</option>
                                <option @if(request()->staff_status == 'nurse') selected @endif value="nurse">Nurse</option>
                                <option @if(request()->staff_status == 'operator') selected @endif value="operator">Operator</option>
                            </select>
                        <button type="submit"><i class="zmdi zmdi-search"></i></button>
                    </form>
                </div>

            <div class="box-body">
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($registrations as $registration)
                    <tr>
                        <th>{{$serial++}}</th>
                        <td>
                            <span class="avatar">
                                <img src="{{asset($registration->staff_image)}}" alt="">
                            </span>
                        </td>
                        <td>{{$registration->staff_name}}</td>
                        <td>{{$registration->staff_email}}</td>
                        <td>{{$registration->staff_phone}}</td>
                        <td>{{ucfirst($registration->staff_gender)}}</td>
                        <td>{{ucfirst($registration->staff_status)}}</td>
                        <td>
                            <div class="box-body">
                                <div class="dropdown">
                                    <button class="button-outline button-primary" data-toggle="dropdown"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></button>
                                    <div style="margin: 0 50px 0 0; background-color: #393d42"  class="dropdown-menu">
                                        @if($registration->deleted_at == null)
                                        <a class="button button-xs button-primary" href="{{route('registration.edit',$registration->id)}}"><i class="fa fa-edit " aria-hidden="true"></i>Edit</a>
                                        <form method="post" action="{{route('registration.destroy',$registration->id)}}">
                                            @csrf
                                            @method('delete')
                                            <button style="background-color: #ff902b; color: #ffffff" class="button button-xs " onclick="return confirm('Are you sure to Delete this Staff on Trash')"><i class="fa fa-trash" aria-hidden="true"></i><span>Trash</span></button>
                                        </form>
                                        @else
                                        <form method="post" action="{{route('registration.restore',$registration->id)}}">
                                            @csrf
                                            <button class="button button-xs button-success" onclick="return confirm('Are you sure to Restore this Staff')"><i class="fa fa-recycle" aria-hidden="true"></i><span>Restore</span></button>
                                        </form>
                                            <form method="post" action="{{route('registration.delete',$registration->id)}}">
                                                @csrf
                                                @method('delete')
                                                <button class="button button-xs button-danger" onclick="return confirm('Are you sure to Delete this Staff')"><i class="fa fa-trash-o" aria-hidden="true"></i><span>Delete</span></button>
                                            </form>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$registrations->render()}}
            </div>
        </div>
    </div>
@endsection