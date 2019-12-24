<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\Teacher;

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

    public function assign_teacher_show()
    {
        return view('admin.assign_teacher_show');
    }

}
