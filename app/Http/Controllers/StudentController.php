<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.student_home');
    }
    public function profile()
    {
        return view('student.student_profile');
    }
    public function profile_1($id)
    {
        return view('student.student_profile_1');
    }
}
