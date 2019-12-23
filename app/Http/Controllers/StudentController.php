<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('student.student_profile');
    }
    public function profile_1()
    {
        return view('student.student_profile_1');
    }
}
