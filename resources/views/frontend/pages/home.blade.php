@extends('frontend.master.fmastering')
@section('main')
<div class="header-area">
    <div class="container" style="height: 842px">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1 class="text-center text-primary" style="font-family:sans-serif; font-weight:800; margin-top:80px; font-size:40px">Welcome to School Management System</h1>
            </div>
        </div>
        <div class="row sal">
            <div class=" bal col-md-5 col-sm-12">
                <form action="{{route('student.info')}}" method="POST" style="padding: 10px;">
                    @csrf
                    <table class="table table-bordered p-5">
                        <tr>
                            <td colspan="2"><h3 class="text-primary" style="font-family:roboto; font-weight:600; font-size:28px;text-align:center">Student Information</h3></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="class">Choose Class:</label>
                            </td>
                            <td>
                                <select name="class" id="class" class="form-control">
                                    <option value="">Select</option>
                                    <option value="1">Class-1</option>
                                    <option value="2">Class-2</option>
                                    <option value="3">Class-3</option>
                                    <option value="4">Class-4</option>
                                    <option value="5">Class-5</option>
                                </select>
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                <label for="roll">Roll No:</label>
                            </td>
                            
                            <td>
                                <input type="text" name="roll" class="form-control" pattern="[0-9]{6}" placeholder="Enter 6 digit Roll">
                                <h3 class="text-danger">{{Session::get('msg')}}</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                               <button class="btn btn-primary">Show Info</button>
                            </td>
                        </tr>
                    </table>
                  </form>
            </div>
        </div>
    </div>
</div> 
@endsection