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

Route::get('/student_add', 'HomeController@student_add')->name('student_add');
Route::post('/student_add', 'HomeController@student_store')->name('student.add.submit');

Route::get('/student_remove', 'HomeController@student_remove')->name('student_remove');
Route::post('/student_remove', 'HomeController@student_delete')->name('student.remove.submit');

Route::get('/teacher_add', 'HomeController@teacher_add')->name('teacher_add');

Route::get('/teacher_remove', 'HomeController@teacher_remove')->name('teacher_remove');

Route::get('/assign_teacher', 'HomeController@assign_teacher')->name('assign_teacher');
Route::get('/register_student', 'HomeController@register_student')->name('register_student');




Route::get('/student_home', 'StudentController@index')->name('student_home');
Route::get('/student/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
Route::post('/student/login', 'Auth\StudentLoginController@login')->name('student.login.submit');
Route::get('/student_profile', 'StudentController@profile')->name('profile');
Route::get('/student_profile_update', 'StudentController@profile_1')->name('profile_update');
Route::post('/student_profile_update', 'StudentController@profile_store')->name('profile.update.submit');






Route::get('/teacher_home', 'TeacherController@index')->name('teacher_home');
Route::get('/teacher/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
Route::post('/teacher/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');
Route::get('/teacher_profile', 'TeacherController@profile')->name('teacher_profile');
Route::get('/teacher_profile_update', 'TeacherController@profile_1')->name('teacher_profile_update');
Route::post('/teacher_profile_update', 'TeacherController@profile_store')->name('teacher_profile.update.submit');
Route::get('/my_courses', 'TeacherController@my_courses')->name('my_courses');
Route::get('/my_courses_1', 'TeacherController@my_courses_1')->name('my_courses_1');
Route::get('/my_courses_2', 'TeacherController@my_courses_2')->name('my_courses_2');
Route::get('/view_student_profile', 'TeacherController@view_student_profile')->name('view_student_profile');



Route::get('/test', 'TestController@index')->name('test');
Route::get('/about', 'TestController@about')->name('about');
