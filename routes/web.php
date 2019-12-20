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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student_home', 'StudentController@index')->name('student_home');
Route::get('/teacher_home', 'TeacherController@index')->name('teacher_home');

Route::get('/student_add', 'HomeController@student_add')->name('student_add');
Route::get('/student_remove', 'HomeController@student_remove')->name('student_remove');
Route::get('/teacher_add', 'HomeController@teacher_add')->name('teacher_add');
Route::get('/teacher_remove', 'HomeController@teacher_remove')->name('teacher_remove');
Route::get('/assign_teacher', 'HomeController@assign_teacher')->name('assign_teacher');
Route::get('/register_student', 'HomeController@register_student')->name('register_student');

Route::get('/student_profile', 'StudentController@profile')->name('profile');
Route::get('/student_profile_update', 'StudentController@profile_1')->name('profile_update');

Route::get('/teacher_profile', 'TeacherController@profile')->name('teacher_profile');
Route::get('/teacher_profile_update', 'TeacherController@profile_1')->name('teacher_profile_update');


Route::get('/testhome', 'HomeController@test')->name('testhome');
Route::get('/test', 'TestController@index')->name('test');
Route::get('/about', 'TestController@about')->name('about');
