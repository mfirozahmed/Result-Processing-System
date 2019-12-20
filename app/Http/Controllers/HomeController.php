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
        return view('home');
    }
    public function test()
    {
        return view('testhome');
    }
    public function student_add()
    {
        return view('student_add');
    }
    public function student_remove()
    {
        return view('student_remove');
    }
    public function teacher_add()
    {
        return view('teacher_add');
    }
    public function teacher_remove()
    {
        return view('teacher_remove');
    }
}
