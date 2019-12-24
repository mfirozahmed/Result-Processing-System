<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Teacher;
use App\Student;
use App\Course;

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

    public function profile_update()
    {
        $teacher = Auth::user();
        return view('teacher.teacher_profile_update')->with('teacher', $teacher);
    }

    public function profile_update_show()
    {
        return view('teacher.teacher_profile_update_show');
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
        
        return view('teacher.teacher_profile_update_show')->with('teacher', $teacher);
    }

    public function my_courses()
    {
        $id = Auth::User()->username;
        $username = Teacher::find($id);
        $all_courses = $username->courses;

        return view('teacher.my_courses')->with('all_courses', $all_courses);
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
    
    public function show_student_profile(Request $request)
    {
        $reg = $request->input('reg');
        $student = Student::find($reg);
        return view('teacher.show_student_profile')->with('student', $student);
    }
}
