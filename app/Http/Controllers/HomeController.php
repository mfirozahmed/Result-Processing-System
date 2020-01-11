<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Student;
use App\Teacher;
use App\Course;
use App\Course_Teacher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function student_add()
    {
        return view('admin.student_add');
    }
    public function student_store(Request $request)
    {
        $this->validate($request, [
            'ref' => 'required',
            'ret' => 'required'
        ]);

        $reg_nof = $request->input('ref');
        $reg_not = $request->input('ret');

        while ($reg_nof <= $reg_not) {
            $student = new Student;
            $student->username = $reg_nof;
            $student->password = Hash::make($reg_nof);
            $student->save();


            if (($reg_nof[9] - '0') < 9)
                $reg_nof[9] = (($reg_nof[9] - '0') + 1) + '0';
            else {
                $reg_nof[9] = '0';

                if (($reg_nof[8] - '0') < 9)
                    $reg_nof[8] = (($reg_nof[8] - '0') + 1) + '0';
                else {
                    $reg_nof[8] = '0';
                    $reg_nof[7] = (($reg_nof[7] - '0') + 1) + '0';
                }
            }
        }

        return redirect()->intended(route('home'));
    }

    public function student_remove()
    {
        return view('admin.student_remove');
    }
    public function student_delete(Request $request)
    {
        $this->validate($request, [
            'reg' => 'required'
        ]);
        
        $student = Student::find($request->input('reg'));
        $student->delete();

        return redirect()->intended(route('home'));
    }

    public function teacher_add()
    {
        return view('admin.teacher_add');
    }
    public function teacher_store(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
        ]);

        $teacher = new Teacher;
        $teacher->username = $request->input('user');
        $teacher->password = Hash::make('12345678');
        $teacher->save();

        return redirect()->intended(route('home'));

    }

    public function teacher_remove()
    {
        return view('admin.teacher_remove');
    }
    public function teacher_delete(Request $request)
    {
        $this->validate($request, [
            'user' => 'required'
        ]);
        
        $teacher = Teacher::find($request->input('user'));
        $teacher->delete();

        return redirect()->intended(route('home'));
    }

    public function assign_teacher()
    {
        return view('admin.assign_teacher');
    }

    public function register_student()
    {
        return view('admin.register_student');
    }

    public function register_student_show()
    {
        return view('admin.register_student_show');
    }

    public function semesterwise_courses($sem)
    {
        //return $id;
        $all_courses = Course::where('sem', '=', $sem)->get();
        //return $all_courses;
        return view('admin.assign_teacher_course')->with('all_courses', $all_courses);
    }

    public function assign_teacher_show($code)
    {
        $teachers = Course_Teacher::where('code', '=', $code)->get();
        //return $teachers;

        $all_teacher[]="";
        $i=0;
        foreach($teachers as $teacher)
        {
            $all_teacher[$i]= $teacher->username;
            $i++;
        }

        $all_teachers = Teacher::whereNotIn('username', $all_teacher)->get();

        //return $all_teachers;

        return view('admin.assign_teacher_show')->with('code', $code)->with('all_teachers', $all_teachers);
    }
    public function assign_teacher_show_submit(Request $request, $code)
    {
        if($request->teachers != null)
        {
            $teachers = $request->input('teachers');
            //return $teachers;
            
            $i = 0;
            foreach($teachers as $teacher)
            {
                //return $teacher;
                $assigned_teacher = new Course_Teacher;
                $assigned_teacher->code = $code;
                $assigned_teacher->username = $teacher;
                $assigned_teacher->year = date('Y');
                $assigned_teacher->save();
                $i++;
            }
        }

        $sem = Course::where('code', '=', $code)->first();
        return redirect("/semester/$sem->sem/courses");
        
    }


    public function change_password()
    {
        return view('admin.change_password');
    }
    public function change_password_submit(Request $request)
    {
        $this->validate($request, [
            'cu_pa' => 'required',
            'ne_pa' => 'required',
            'co_pa' => 'required'
        ]);

        $old_password = Auth::User()->password;
        $current_password = $request->input('cu_pa');
        
        if (Hash::check($current_password, $old_password))
        {
            $new_password = $request->input('ne_pa');
            $confirm_password = $request->input('co_pa');
            if ($new_password == $confirm_password)
            {
                $user = User::find(Auth::User()->username);
                $user->password = Hash::make($new_password);
                $user->save();
                return redirect()->intended(route('home'));
            }
        }

        return "Wrong Password";
    }

    public function add_course()
    {
        return view('admin.add_course');
    }
    public function add_course_submit(Request $request)
    {
        $this->validate($request, [
            'code' => 'required',
            'title' => 'required',
            'credit' => 'required',
            'sem' => 'required'
        ]);

        $course = new Course;
        
        $course->code = $request->input('code');
        $course->title = $request->input('title');
        $course->credit = $request->input('credit');
        $course->desc = $request->input('desc');
        $course->sem = $request->input('sem');

        $course->save();

        return redirect()->intended(route('home'));
    }

}
