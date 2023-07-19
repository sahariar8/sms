<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        
        return view('frontend.pages.home');
    }
    public function info(Request $request){
        $roll = $request->roll;
        $class = $request->class;
        $student = Student::where('roll',$roll )->where('class',$class)->first();
        
        if ($student) {
            return view('frontend.pages.studentinfo',compact('student'));
        }
        return back()->with('msg','Roll Does Not Exist'); 
        
       
        
    }
}
