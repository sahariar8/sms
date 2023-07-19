@extends('backend.master.bmastering')
@section('student.add')
<div class="container">
    <h3 class="text-center m-5" style="font-family:Sans-serif; font-weight:800;font-size:40px; color:#428bca;">Student Information Update Form</h3>
    <h4 class="text-center text-success">{{Session::get('msg')}}</h4>
    <div class="row">
        <div class="col-md-6 col-sm-12" style="margin: auto;">
            <form  action="{{route('student.update',$student->id)}}" method="POST" enctype="multipart/form-data" class="p-5 border border rounded">
                @csrf
                <div class="form-group">
                  <label for="name"><b>Name:</b></label>
                  <input type="text" class="form-control mb-3" name="name" value="{{$student->name}}">
                </div>
                <div class="form-group">
                  <label for="roll"><b>Roll:</b></label>
                  <input type="text" class="form-control mb-3"placeholder="Enter roll ( 6 digit )"  pattern="[0-9]{6}" name="roll" value="{{$student->roll}}">
                </div>
                <div class="form-group">
                  <label for="class"><b>Class:</b></label>
                  {{-- <input type="text" class="form-control mb-3" pattern="[0-9]" name="class" value="{{$student->class}}"> --}}
                  <select name="class" id="class" class="form-control" >
                        <option value="{{$student->class}}"{{$student->class == 1 ? 'selected' : ''}}>Class-1</option>
                        <option value="{{$student->class}}"{{$student->class == 2 ? 'selected' : ''}}>Class-2</option>
                        <option value="{{$student->class}}"{{$student->class == 3 ? 'selected' : ''}}>Class-3</option>
                        <option value="{{$student->class}}"{{$student->class == 4 ? 'selected' : ''}}>Class-4</option>
                        <option value="{{$student->class}}"{{$student->class == 5 ? 'selected' : ''}}>Class-5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="city"><b>City:</b></label>
                  <input type="text" class="form-control mb-3" name="city" value="{{$student->city}}">
                </div>
                <div class="form-group">
                  <label for="contact"><b>Contact:</b></label>
                  <input type="text" class="form-control mb-3"placeholder="Enter Mobile Number"  pattern="[0-9]{11}" name="contact" value="{{$student->contact}}">
                </div>
                <div class="form-group">
                  <label for="img"><b>Image:</b></label>
                  <img src="{{asset('/')}}{{$student->img}}" alt="" style="height: 50px; width:50px">
                </div>
                <div class="form-group">
                  <label for="img"><b>Image:</b></label>
                  <input type="file" class="form-control mb-3" name="img">
                </div>
                <button type="submit" class="btn text-light" style="background-color: #428bca;">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
