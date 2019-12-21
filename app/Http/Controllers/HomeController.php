<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Student;
use App\User;

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
    public function test()
    {
        return view('admin.testhome');
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
            $student->reg = date('Y') * 1000000 + 331000 + $reg_nof;
            $student->save();


            $user = new User;
            $user->name = date('Y') * 1000000 + 331000 + $reg_nof;
            $user->email = "";
            $user->password = Hash::make(date('Y') * 1000000 + 331000 + $reg_nof);
            $user->save();

            if (($reg_nof[2] - '0') < 9)
                $reg_nof[2] = (($reg_nof[2] - '0') + 1) + '0';
            else {
                $reg_nof[2] = '0';

                if (($reg_nof[1] - '0') < 9)
                    $reg_nof[1] = (($reg_nof[1] - '0') + 1) + '0';
                else {
                    $reg_nof[1] = '0';
                    $reg_nof[0] = (($reg_nof[0] - '0') + 1) + '0';
                }
            }
        }

        return redirect('/home');
    }
    public function student_remove()
    {
        return view('admin.student_remove');
    }
    public function teacher_add()
    {
        return view('admin.teacher_add');
    }
    public function teacher_remove()
    {
        return view('admin.teacher_remove');
    }
    public function assign_teacher()
    {
        return view('admin.assign_teacher');
    }
    public function register_student()
    {
        return view('admin.register_student');
    }
}
