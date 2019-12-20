<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student_home');
    }
    public function profile()
    {
        return view('student_profile');
    }
    public function profile_1()
    {
        return view('student_profile_1');
    }
}
