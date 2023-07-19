@extends('backend.master.bmastering')
@section('all.students')
<div class="container">
    <h3 class="text-center m-5" style="font-family:Sans-serif; font-weight:800;font-size:40px; color:#428bca;">All Students Details</h3>
    <h4 class="text-center text-success">{{Session::get('msg')}}</h4>
    <div class="row">
        <div class="col-md-8 col-sm-12" style="margin: auto;">
            <table class="table table-bordered text-center">
                <tr>
                    <th>#Id</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Roll</th>
                    <th>City</th>
                    <th>Contact</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach ($student as $s)
                <tr>
                    <td>{{$s->id}}</td>
                    <td>{{$s->name}}</td>
                    <td>{{$s->class}}</td>
                    <td>{{$s->roll}}</td>
                    <td>{{$s->city}}</td>
                    <td>{{$s->contact}}</td>
                    <td><img src="{{asset('/')}}{{$s->img}}" alt="" style="height: 50px; width:50px"></td>
                    <td>
                        <a href="{{route('student.edit',$s->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('student.destroy',$s->id)}}" class="btn btn-danger" onclick="return confirm('Are you Sure to delete this Student?')">Delete</a>
                    </td>
                </tr>
                    
                @endforeach

            </table>
            
        </div>
    </div>
</div>
@endsection