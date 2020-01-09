<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index()
    {
        return view('student.student_home');
    }
    public function profile()
    {
        $student = Auth::user();
        return view('student.student_profile')->with('student', $student);
    }
    public function profile_1()
    {
        $student = Auth::user();
        return view('student.student_profile_1')->with('student', $student);
    }
    public function profile_update_show()
    {
        $student = Auth::user();
        return view('student.student_profile_update_show')->with('student', $student);
    }
    public function profile_store(Request $request)
    {
        $id = Auth::user()->username;

        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->dob = $request->input('dob');
        $student->phone = $request->input('phone');
        $student->address = $request->input('address');

        $student->save();
        
        return view('student.student_profile_update_show')->with('student', $student);
    }

    public function student_change_password()
    {
        return view('student.change_password');
    }
    public function result()
    {
        return view('student.result');
    }
    public function student_change_password_submit(Request $request)
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
                $user = Student::find(Auth::User()->username);
                $user->password = Hash::make($new_password);
                $user->save();
                return redirect()->intended(route('student_home'));
            }
            else
                return view('student.change_password');
        }
        return "Wrong Password";
    }
}
