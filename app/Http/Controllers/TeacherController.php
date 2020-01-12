<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Teacher;
use App\Student;
use App\Course;
use App\Course_Student;
use App\Course_Teacher;

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
        $all_courses = $username->courses()->wherePivot('year', '=', date('Y'))->get();

        return view('teacher.my_courses')->with('all_courses', $all_courses);
    }

    public function my_specific_course($id)
    {
        return view('teacher.my_specific_course')->with('id', $id);
    }

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
        $all_students = Course::find($id)->students()->orderBy('username')->get();

        if (count($all_students))
        {
            $i = 0;
            foreach ($all_students as $student)
            {
                $indv_std = Course_Student::where('username', $student->username)->first();
                $indv_std->tt1 = $request->tt1[$i];
                $indv_std->tt2 = $request->tt2[$i];
                $indv_std->att = $request->att[$i];
                $indv_std->final = $request->final[$i];

                $cal = ($indv_std->tt1 + $indv_std->tt2)/2;
                $cal += $indv_std->att;
                $cal += $indv_std->final*.7;

                if ($cal>79)
                    $indv_std->cgpa = 'A+';
                elseif ($cal>74 && $cal<80)
                    $indv_std->cgpa = 'A'; 
                elseif ($cal>69 && $cal<75) 
                    $indv_std->cgpa = 'A-';
                elseif ($cal>64 && $cal<70) 
                    $indv_std->cgpa = 'B+';
                elseif ($cal>59 && $cal<65) 
                    $indv_std->cgpa = 'B';
                elseif ($cal>54 && $cal<60) 
                    $indv_std->cgpa = 'B-';
                elseif ($cal>49 && $cal<55) 
                    $indv_std->cgpa = 'C+';
                elseif ($cal>44 && $cal<50) 
                    $indv_std->cgpa = 'C';
                elseif ($cal>39 && $cal<45) 
                    $indv_std->cgpa = 'C-';
                else 
                    $indv_std->cgpa = 'F';

                $indv_std->save();

                $i = $i+1;
            }
        }

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
        $courses = $student->courses()->get();

        $data = array(
            'student' => $student,
            'courses' => $courses
        );
        return view('teacher.show_student_profile')->with($data);
    }

    public function teacher_change_password()
    {
        return view('teacher.change_password');
    }
    public function teacher_change_password_submit(Request $request)
    {
        $this->validate($request, [
            'cu_pa' => 'required',
            'ne_pa' => 'required',
            'co_pa' => 'required'
        ]);
        
        $old_password = Auth::User()->password;
        //return $old_password;
        $current_password = $request->input('cu_pa');
        
        if (Hash::check($current_password, $old_password))
        {
            //return 2;
            $new_password = $request->input('ne_pa');
            $confirm_password = $request->input('co_pa');
            if ($new_password == $confirm_password)
            {
                $user = Teacher::find(Auth::User()->username);
                $user->password = Hash::make($new_password);
                $user->save();
                return redirect()->intended(route('teacher_home'));
            }
            else
                return view('teacher.change_password');
        }
        return "Wrong Password";
    }
}
