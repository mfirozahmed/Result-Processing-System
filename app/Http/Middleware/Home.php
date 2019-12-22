<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Home
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->type == 1) {
            return $next($request);
        }
        if (Auth::user()->type == 2) {
            return redirect()->route('teacher_home');
        }
        if (Auth::user()->type == 3) {
            return redirect()->route('student_home');
        }
    }
}
