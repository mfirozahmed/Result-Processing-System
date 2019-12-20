<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.teacher_home');
    }
    public function profile()
    {
        return view('teacher.teacher_profile');
    }
    public function profile_1()
    {
        return view('teacher.teacher_profile_1');
    }
}
