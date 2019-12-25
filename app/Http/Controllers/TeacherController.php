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
        //return $all_courses;

        return view('teacher.my_courses')->with('all_courses', $all_courses);
    }

    public function my_specific_course($id)
    {
        return view('teacher.my_specific_course')->with('id', $id);
    }

    /*public function my_specific_course_mark(Request $request, $id)
    {
        //return $request;
        return redirect("/my_courses/$id/marks");
        
        //return $id;
        //$id = Auth::User()->username;
        //$code = Course::find($id);
        //$all_students = $code->students;

        /*foreach ($code->students as $student) {
            return $student->pivot->tt1;
        }*/
        /*$data = array(
            'code' => $id,
            'all_students' => $all_students
        );
        //return $all_students;
        //return view('teacher.my_specific_course')->with('id', $id);
        return view('teacher.my_specific_course_mark')->with($data);*/
   // }
    public function my_specific_course_marks($id)
    {
        $all_students = Course::find($id)->students()->orderBy('username')->get();

        $data = array(
            'code' => $id,
            'all_students' => $all_students
        );

        return view('teacher.my_specific_course_mark')->with($data);
    }
    public function my_specific_course_marks_submit(Request $request, $id)
    {

        return redirect(route('my_courses'));
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
