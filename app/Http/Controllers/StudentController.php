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
    public function profile_update()
    {
        $student = Auth::user();
        return view('student.student_profile_update')->with('student', $student);
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
        
        $coursesx = Course_Student::where([
                                            ['username', '=', $id],
                                            ['grade', '!=', 'F']
                                                                    ])->get();
        
        //return $coursesx;
        if(count($coursesx)< 1)
            return 1;
        
       $i=0;

        foreach($coursesx as $course)
        {
            $all_courses[$i]=$course->code;
            $i++;
        }

        $courses = Course::whereIn('code', $all_courses)->get();
        $credits = 0;
        foreach($courses as $course)
            $credits += $course->credit;

        $total_gpa = 0;

        foreach($courses as $course)
        {
            foreach($coursesx as $y)
            {
                if($course->code == $y->code)
                    $total_gpa += ($course->credit * $y->cgpa);
            }
        }

        if($credits != 0)
            $total_gpa /= $credits;
        $total_gpa = number_format($total_gpa, 2, '.', '');

        if ($total_gpa == 4)
        {
            $tgrade = 'A+';
        }
        elseif ($total_gpa>3.74 && $total_gpa<4)
        {
            $tgrade = 'A';
        } 
        elseif ($total_gpa>3.49 && $total_gpa<3.75) 
        {
            $tgrade = 'A-';
        }
        elseif ($total_gpa>3.24 && $total_gpa<3.5) 
        {
            $tgrade = 'B+';
        }
        elseif ($total_gpa>2.99 && $total_gpa<3.25) 
        {
            $tgrade = 'B';
        }
        elseif ($total_gpa>2.74 && $total_gpa<3) 
        {
            $tgrade = 'B-';
        }
        elseif ($total_gpa>2.49 && $total_gpa<2.75) 
        {
            $tgrade = 'C+';
        }
        elseif ($total_gpa>2.24 && $total_gpa<2.5) 
        {
            $tgrade = 'C';
        }
        elseif ($total_gpa>1.99 && $total_gpa<2.25) 
        {
            $tgrade = 'C-';
        }
        else 
        {
            $tgrade = 'F';
        }







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
        
        //if(count($x) < 1)
            //return 1;
        $sem_one_credits = 0;
        $sem_one_gpa = 0;
        $j=0;
        $grade[]="";
        $cgpa[]="";
        foreach($sem_one as $course)
        {
            if(count($x) < 1)
            {
                $grade[$j] = 'F';
                $cgpa[$j] = '0.00';
            }
            foreach($x as $y)
            {
                if($course->code == $y->code)
                {
                    $grade[$j] = $y->grade;
                    $cgpa[$j] = $y->cgpa;
                    $sem_one_credits += $course->credit;
                    $sem_one_gpa += ($course->credit * $y->cgpa);
                    break;
                }
                else
                {
                    $grade[$j] = 'F';
                    $cgpa[$j] = '0.00';
                }
            }
            $j++;
        }
        //return $cgpa;
        if($sem_one_credits != 0)
            $sem_one_gpa /= $sem_one_credits;
        $sem_one_gpa = number_format($sem_one_gpa, 2, '.', '');
        
        if ($sem_one_gpa == 4)
        {
            $sem_one_grade = 'A+';
        }
        elseif ($sem_one_gpa>3.74 && $sem_one_gpa<4)
        {
            $sem_one_grade = 'A';
        } 
        elseif ($sem_one_gpa>3.49 && $sem_one_gpa<3.75) 
        {
            $sem_one_grade = 'A-';
        }
        elseif ($sem_one_gpa>3.24 && $sem_one_gpa<3.5) 
        {
            $sem_one_grade = 'B+';
        }
        elseif ($sem_one_gpa>2.99 && $sem_one_gpa<3.25) 
        {
            $sem_one_grade = 'B';
        }
        elseif ($sem_one_gpa>2.74 && $sem_one_gpa<3) 
        {
            $sem_one_grade = 'B-';
        }
        elseif ($sem_one_gpa>2.49 && $sem_one_gpa<2.75) 
        {
            $sem_one_grade = 'C+';
        }
        elseif ($sem_one_gpa>2.24 && $sem_one_gpa<2.5) 
        {
            $sem_one_grade = 'C';
        }
        elseif ($sem_one_gpa>1.99 && $sem_one_gpa<2.25) 
        {
            $sem_one_grade = 'C-';
        }
        else 
        {
            $sem_one_grade = 'F';
        }

        $sem_two = Course::where('sem', '=', '2')->get();
        //return $sem_two;

        $i=0;
        $all_courses2[]='';
        foreach($sem_two as $course)
        {
            $all_courses2[$i]=$course->code;
            $i++;
        }
        //return $all_courses1;
        $x = Course_Student::whereIn('code', $all_courses2)
                            ->where('username', $id)
                            ->get();
        
        //return $x;
        $sem_two_credits = 0;
        $sem_two_gpa = 0;
        $j=0;
        $gradex[]='';
        $cgpax[]='';
        foreach($sem_two as $course)
        {
            if(count($x) < 1)
            {
                $gradex[$j] = 'F';
                $cgpax[$j] = '0.00';
            }
            foreach($x as $y)
            {
                if($course->code == $y->code)
                {
                    $gradex[$j] = $y->grade;
                    $cgpax[$j] = $y->cgpa;
                    $sem_two_credits += $course->credit;
                    $sem_two_gpa += ($course->credit * $y->cgpa);
                    break;
                }
                else
                {
                    $gradex[$j] = 'F';
                    $cgpax[$j] = '0.00';
                }
            }
            $j++;
        }
        //return $gradex;
        if($sem_two_credits != 0)
            $sem_two_gpa /= $sem_two_credits;
        
        $sem_two_gpa = number_format($sem_two_gpa, 2, '.', '');

        if ($sem_two_gpa == 4)
        {
            $sem_two_grade = 'A+';
        }
        elseif ($sem_two_gpa>3.74 && $sem_two_gpa<4)
        {
            $sem_two_grade = 'A';
        } 
        elseif ($sem_two_gpa>3.49 && $sem_two_gpa<3.75) 
        {
            $sem_two_grade = 'A-';
        }
        elseif ($sem_two_gpa>3.24 && $sem_two_gpa<3.5) 
        {
            $sem_two_grade = 'B+';
        }
        elseif ($sem_two_gpa>2.99 && $sem_two_gpa<3.25) 
        {
            $sem_two_grade = 'B';
        }
        elseif ($sem_two_gpa>2.74 && $sem_two_gpa<3) 
        {
            $sem_two_grade = 'B-';
        }
        elseif ($sem_two_gpa>2.49 && $sem_two_gpa<2.75) 
        {
            $sem_two_grade = 'C+';
        }
        elseif ($sem_two_gpa>2.24 && $sem_two_gpa<2.5) 
        {
            $sem_two_grade = 'C';
        }
        elseif ($sem_two_gpa>1.99 && $sem_two_gpa<2.25) 
        {
            $sem_two_grade = 'C-';
        }
        else 
        {
            $sem_two_grade = 'F';
        }
        $sem_three = Course::where('sem', '=', '3');
        $sem_four = Course::where('sem', '=', '4');
        $sem_five = Course::where('sem', '=', '5');
        $sem_six = Course::where('sem', '=', '6');
        $sem_seven = Course::where('sem', '=', '7');
        $sem_eight = Course::where('sem', '=', '8');

        return view('student.result')->with('student', $student)->with('credits', $credits)->with('total_gpa', $total_gpa)->with('tgrade', $tgrade)
                                     ->with('sem_one', $sem_one)->with('grade', $grade)->with('cgpa', $cgpa)
                                     ->with('sem_one_credits', $sem_one_credits)->with('sem_one_gpa', $sem_one_gpa)->with('sem_one_grade', $sem_one_grade)
                                     ->with('sem_two', $sem_two)->with('gradex', $gradex)->with('cgpax', $cgpax)
                                     ->with('sem_two_credits', $sem_two_credits)->with('sem_two_gpa', $sem_two_gpa)->with('sem_two_grade', $sem_two_grade);
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








    public function total_result()
    {
        $id = Auth::user()->username;
        $student = Student::find($id);
        
        $coursesx = Course_Student::where([
                                            ['username', '=', $id],
                                            ['grade', '!=', 'F']
                                                                    ])->get();
        
        //return $coursesx;
        if(count($coursesx)< 1)
            return 1;
        
       $i=0;
       $all_courses[]="";
       $all_grades[]="";
       $all_cgpa[]="";
        foreach($coursesx as $course)
        {
            $all_courses[$i]=$course->code;
            $all_grades[$i]=$course->grade;
            $all_cgpa[$i]=$course->cgpa;
            $i++;
        }

        $courses = Course::whereIn('code', $all_courses)->get();
        $credits = 0;
        foreach($courses as $course)
            $credits += $course->credit;

        $total_gpa = 0;

        foreach($courses as $course)
        {
            foreach($coursesx as $y)
            {
                if($course->code == $y->code)
                    $total_gpa += ($course->credit * $y->cgpa);
            }
        }

        if($credits != 0)
            $total_gpa /= $credits;
        $total_gpa = number_format($total_gpa, 2, '.', '');

        if ($total_gpa == 4)
        {
            $tgrade = 'A+';
        }
        elseif ($total_gpa>3.74 && $total_gpa<4)
        {
            $tgrade = 'A';
        } 
        elseif ($total_gpa>3.49 && $total_gpa<3.75) 
        {
            $tgrade = 'A-';
        }
        elseif ($total_gpa>3.24 && $total_gpa<3.5) 
        {
            $tgrade = 'B+';
        }
        elseif ($total_gpa>2.99 && $total_gpa<3.25) 
        {
            $tgrade = 'B';
        }
        elseif ($total_gpa>2.74 && $total_gpa<3) 
        {
            $tgrade = 'B-';
        }
        elseif ($total_gpa>2.49 && $total_gpa<2.75) 
        {
            $tgrade = 'C+';
        }
        elseif ($total_gpa>2.24 && $total_gpa<2.5) 
        {
            $tgrade = 'C';
        }
        elseif ($total_gpa>1.99 && $total_gpa<2.25) 
        {
            $tgrade = 'C-';
        }
        else 
        {
            $tgrade = 'F';
        }
        return view('student.total_result')->with('student', $student)->with('courses', $courses)->with('credits', $credits)->with('total_gpa', $total_gpa)->with('tgrade', $tgrade)
                                            ->with('all_grades', $all_grades)->with('all_cgpa', $all_cgpa);
    }
    public function semester_wise_result($sem)
    {
        return $sem;
        return view('student.semester_wise_result');
    }
}
