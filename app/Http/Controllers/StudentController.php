<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index()
    {
        return view('student.student_home');
    }
    public function profile()
    {
        $student = Auth::user();
        return view('student.student_profile')->with('student', $student);
    }
    public function profile_1()
    {
        $student = Auth::user();
        return view('student.student_profile_1')->with('student', $student);
    }
    public function profile_update_show()
    {
        $student = Auth::user();
        return view('student.student_profile_update_show')->with('student', $student);
    }
    public function profile_store(Request $request)
    {
        $id = Auth::user()->username;

        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->dob = $request->input('dob');
        $student->phone = $request->input('phone');
        $student->address = $request->input('address');

        $student->save();
        
        return view('student.student_profile_update_show')->with('student', $student);
    }

    public function student_change_password()
    {
        return view('student.change_password');
    }
}
