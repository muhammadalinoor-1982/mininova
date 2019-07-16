@extends('layouts.backend.master')
@section('content-body')
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">{{$title}}</h4><br>
                <a href="{{route('registration.create')}}" class="button button-outline button-success" ><span>Add New</span></a>
            </div>


            <form>
                <div class="col-lg-4 mb-15"><input name="search" type="text" value="{{request()->search}}" class="form-control" placeholder="Input focus default"></div>
                <select name="staff_status" id="">
                    <option value="">Select Type</option>
                    <option @if(request()->staff_status == 'supervisor') selected @endif value="supervisor">Supervisor</option>
                    <option @if(request()->staff_status == 'nurse') selected @endif value="nurse">Nurse</option>
                    <option @if(request()->staff_status == 'operator') selected @endif value="operator">Operator</option>
                </select>
                <button class="button button-outline button-primary" type="submit"><span>Search</span></button>
            </form>


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
                                    <button class="button button-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="button button-dropbox dropdown-item" href="{{route('registration.edit',$registration->id)}}"><i class="fa fa-edit " aria-hidden="true"></i>Edit</a>
                                        @if($registration->deleted_at == null)
                                        <form method="post" action="{{route('registration.destroy',$registration->id)}}">
                                            @csrf
                                            @method('delete')
                                            <button class="button button-youtube dropdown-item" onclick="return confirm('Are you sure to Delete this Staff on Trash')"><i class="zmdi zmdi-delete zmdi-hc-fw"></i><span>Trash</span></button>
                                        </form>
                                        @else
                                        <form method="post" action="{{route('registration.restore',$registration->id)}}">
                                            @csrf
                                            <button class="button button-youtube dropdown-item" onclick="return confirm('Are you sure to Restore this Staff')"><i class="zmdi zmdi-delete zmdi-hc-fw"></i><span>Restore</span></button>
                                        </form>
                                            <form method="post" action="{{route('registration.delete',$registration->id)}}">
                                                @csrf
                                                @method('delete')
                                                <button class="button button-youtube dropdown-item" onclick="return confirm('Are you sure to Delete this Staff')"><i class="zmdi zmdi-delete zmdi-hc-fw"></i><span>Delete</span></button>
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