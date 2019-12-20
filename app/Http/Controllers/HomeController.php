<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
