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
    public function profile_store(Request $request)
    {
        $id = Auth::user()->username;

        $student = Student::find($id);
        return $student;
        return view('student.student_profile')->with('student', $student);
    }
}
