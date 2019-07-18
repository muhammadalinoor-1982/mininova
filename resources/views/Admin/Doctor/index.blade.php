@extends('layouts.backend.master')
@section('content-body')
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">{{$title}}</h3>
                <a href="{{route('doctor.create')}}" class="button button-outline button-success" ><span>Add New</span></a>
            </div>
            <div class="box-body">

                <table class="table table-bordered data-table data-table-export">
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
                                {{--<div class="box-body">--}}
                                    {{--<div class="dropdown">--}}
                                        {{--<button class="button button-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></button>--}}
                                        {{--<div class="dropdown-menu">--}}
                                            {{--<a class="button button-dropbox dropdown-item" href="{{route('doctor.edit',$doctor->id)}}"><i class="fa fa-edit " aria-hidden="true"></i>Edit</a>--}}
                                            {{--<form method="post" action="{{route('doctor.destroy',$doctor->id)}}">--}}
                                                {{--@csrf--}}
                                                {{--@method('delete')--}}
                                                {{--<button class="button button-youtube dropdown-item" onclick="return confirm('Are you sure to Delete this Doctor')"><i class="zmdi zmdi-delete zmdi-hc-fw"></i><span>Delete</span></button>--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="box-body">
                                    <div class="dropdown">
                                        <button class="button-outline button-primary" data-toggle="dropdown"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></button>
                                        <div style="margin: 0 50px 0 0; background-color: #393d42"  class="dropdown-menu">
                                            @if($doctor->deleted_at == null)
                                            <a class="button button-xs button-primary" href="{{route('doctor.edit',$doctor->id)}}"><i class="fa fa-edit " aria-hidden="true"></i>Edit</a>
                                                <form method="post" action="{{route('doctor.destroy',$doctor->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button style="background-color: #ff902b; color: #ffffff" class="button button-xs " onclick="return confirm('Are you sure to Delete this Staff on Trash')"><i class="fa fa-trash" aria-hidden="true"></i><span>Trash</span></button>
                                                </form>
                                            @else
                                                <form method="post" action="{{route('doctor.restore',$doctor->id)}}">
                                                    @csrf
                                                    <button class="button button-xs button-success" onclick="return confirm('Are you sure to Restore this Staff')"><i class="fa fa-recycle" aria-hidden="true"></i><span>Restore</span></button>
                                                </form>
                                                <form method="post" action="{{route('doctor.delete',$doctor->id)}}">
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
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script>
        $('.data-table-default').DataTable({
            responsive: true,
            language: {
                paginate: {
                    previous: '<',
                    next: '>'
                }
            }
        });
    </script>
@endsection