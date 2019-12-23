<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Teacher;

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
        $teacher = Auth::user();
        return view('teacher.teacher_profile')->with('teacher', $teacher);
    }
    public function profile_1()
    {
        $teacher = Auth::user();
        return view('teacher.teacher_profile_1')->with('teacher', $teacher);
    }
    public function profile_store(Request $request)
    {
        $id = Auth::user()->username;

        $teacher = Teacher::find($id);
        $teacher->name = $request->input('name');
        $teacher->email = $request->input('email');
        $teacher->des = $request->input('des');
        $teacher->phone = $request->input('phone');;

        $teacher->save();
        
        return view('teacher.teacher_profile')->with('teacher', $teacher);
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
