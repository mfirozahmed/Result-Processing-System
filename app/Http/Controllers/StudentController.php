<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\Course;
use App\Course_Student;

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
    public function student_changed_password()
    {
        return view('student.changed_password');
    }
    public function result()
    {
        $id = Auth::user()->username;
        $student = Student::find($id);
        
        $courses = Course_Student::where([
                                            ['username', '=', $id],
                                            ['cgpa', '!=', 'F']
                                                                    ])->get();
        
        
        if(count($courses)< 1)
            return 1;
        
       $i=0;

        foreach($courses as $course)
        {
            $all_courses[$i]=$course->code;
            $i++;
        }

        $courses = Course::whereIn('code', $all_courses)->get();
        $credits = 0;
        foreach($courses as $course)
            $credits += $course->credit;

        
        $sem_one = Course::where('sem', '=', '1')->get();

        $i=0;
        foreach($sem_one as $course)
        {
            $all_courses1[$i]=$course->code;
            $i++;
        }
        //return $all_courses1;
        $x = Course_Student::whereIn('code', $all_courses1)
                            ->where('username', $id)
                            ->get();
        
        //return $x;
        $j=0;
        foreach($sem_one as $course)
        {
            foreach($x as $y)
            {
                if($course->code == $y->code)
                {
                    $grade[$j] = $y->cgpa;
                }
                else
                {
                    $grade[$j] = 'F';
                }
            }
            $j++;
        }
        //return $grade;

        $sem_two = Course::where('sem', '=', '2');
        $sem_three = Course::where('sem', '=', '3');
        $sem_four = Course::where('sem', '=', '4');
        $sem_five = Course::where('sem', '=', '5');
        $sem_six = Course::where('sem', '=', '6');
        $sem_seven = Course::where('sem', '=', '7');
        $sem_eight = Course::where('sem', '=', '8');

        return view('student.result')->with('student', $student)->with('credits', $credits)->with('sem_one', $sem_one)->with('grade', $grade);
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
                return redirect()->intended(route('student_home'))->with('success', 'Password has been changed successfully..');
            }
        }
        return redirect('/student/change_password')->with('error', 'Invalid Current Password');
    }
}
