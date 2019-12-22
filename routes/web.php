<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('home');
Route::get('/student_home', 'StudentController@index')->name('student_home')->middleware('student');
Route::get('/teacher_home', 'TeacherController@index')->name('teacher_home')->middleware('teacher');

Route::get('/student_add', 'HomeController@student_add')->name('student_add')->middleware('home');
Route::post('/student_add', 'HomeController@student_store')->middleware('home');

Route::get('/student_remove', 'HomeController@student_remove')->name('student_remove')->middleware('home');
Route::get('/teacher_add', 'HomeController@teacher_add')->name('teacher_add')->middleware('home');
Route::get('/teacher_remove', 'HomeController@teacher_remove')->name('teacher_remove')->middleware('home');
Route::get('/assign_teacher', 'HomeController@assign_teacher')->name('assign_teacher')->middleware('home');
Route::get('/register_student', 'HomeController@register_student')->name('register_student')->middleware('home');

Route::get('/student_profile', 'StudentController@profile')->name('profile')->middleware('student');
Route::get('/student_profile_update', 'StudentController@profile_1')->name('profile_update')->middleware('student');

Route::get('/teacher_profile', 'TeacherController@profile')->name('teacher_profile')->middleware('teacher');
Route::get('/teacher_profile_update', 'TeacherController@profile_1')->name('teacher_profile_update')->middleware('teacher');
Route::get('/my_courses', 'TeacherController@my_courses')->name('my_courses')->middleware('teacher');
Route::get('/my_courses_1', 'TeacherController@my_courses_1')->name('my_courses_1')->middleware('teacher');
Route::get('/my_courses_2', 'TeacherController@my_courses_2')->name('my_courses_2')->middleware('teacher');
Route::get('/view_student_profile', 'TeacherController@view_student_profile')->name('view_student_profile')->middleware('teacher');




Route::get('/testhome', 'HomeController@test')->name('testhome');
Route::get('/test', 'TestController@index')->name('test');
Route::get('/about', 'TestController@about')->name('about');
