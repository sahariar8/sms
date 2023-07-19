<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        $student = Student::count();
        return view('backend.pages.dashboard',compact('student'));
    }
    public function show(){
        return view('backend.pages.add_student');
    }
    public function insert(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->class = $request->class;
        $student->city = $request->city;
        $student->contact = $request->contact;
        $img = $request->img;
        $imgName = $img->getClientOriginalName();
        $folder = 'backend/images/';
        $img->move($folder, $imgName);
        $student->img = $folder.$imgName;

        $student->save();
        return back()->with('msg','Student Added Successfully');

    }

    public function store(){
        $student = Student::all();
        return view('backend.pages.all_students',compact('student'));
    }
    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return back()->with('msg','Student Deleted Successfully');
    }
    public function edit($id){
        $student = Student::find($id);
        return view('backend.pages.edit_student',compact('student'));
    }
    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->class = $request->class;
        $student->city = $request->city;
        $student->contact = $request->contact;
        if($request->img){
           if(file_exists($student->img)){
            unlink($student->img);
           }
        $img = $request->img;
        $imgName = $img->getClientOriginalName();
        $folder = 'backend/images/';
        $img->move($folder, $imgName);
        $student->img = $folder.$imgName;
        }
        $student->save();
        return back()->with('msg','Student Information Updated Successfully');
    }
    public function user(){
        return view('backend.pages.user');
    }
}
