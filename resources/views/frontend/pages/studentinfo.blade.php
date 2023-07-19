@extends('frontend.master.fmastering')
@section('info')
    <div class="container">
        <h1  class="text-center text-primary" style="margin-top: 200px;font-family:sans-serif; font-weight:800;font-size:40px">Student Personal Information</h1>
        <div class="row info">
            
            <div class=" col-md-6 col-sm-12" style="margin-top: 15px">
                    <table class="table table-bordered text-center" style="border-radious:8px">

                        <tr>
                            <th class="text-center text-primary">Name</th>
                            <td>{{$student->name}}</td>
                            <td rowspan="5"> <img src="{{asset('/')}}{{$student->img}}" alt="" style="height: 150px; width:150px"></td>
                        </tr>
                        
                        <tr>
                            <th class="text-center text-primary">City</th>
                            <td>{{$student->city}}</td>
                        </tr>
                        <tr>
                           
                            <th class="text-center text-primary">Contact</th>
                            <td>{{$student->contact}}</td>
                        </tr>
                        <tr>
                            <th class="text-center text-primary">Roll</th>
                            <td>{{$student->roll}}</td>
                        </tr>
                        <tr>
                            <th class="text-center text-primary">class</th>
                            <td>{{$student->class}}</td>
                        </tr>
                       
                       
                       

                    </table>
            </div>
        </div>
    </div>
@endsection