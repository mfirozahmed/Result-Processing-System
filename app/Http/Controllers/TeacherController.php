<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

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
    public function my_courses()
    {
        return view('teacher.my_courses');
    }
    public function my_courses_1()
    {
        return view('teacher.my_courses_1');
    }
    public function my_courses_2()
    {
        return view('teacher.my_courses_2');
    }
    public function view_student_profile()
    {
        return view('teacher.view_student_profile');
    }
}
