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
Route::get('admin/logout', 'Auth\LoginController@adminLogout')->name('admin.logout');

Route::get('/student_add', 'HomeController@student_add')->name('student_add');
Route::post('/student_add', 'HomeController@student_store')->name('student.add.submit');

Route::get('/student_remove', 'HomeController@student_remove')->name('student_remove');
Route::post('/student_remove', 'HomeController@student_delete')->name('student.remove.submit');

Route::get('/teacher_add', 'HomeController@teacher_add')->name('teacher_add');
Route::post('/teacher_add', 'HomeController@teacher_store')->name('teacher.add.submit');

Route::get('/teacher_remove', 'HomeController@teacher_remove')->name('teacher_remove');
Route::post('/teacher_remove', 'HomeController@teacher_delete')->name('teacher.remove.submit');

Route::get('/assign_teacher', 'HomeController@assign_teacher')->name('assign_teacher');
Route::get('/register_student', 'HomeController@register_student')->name('register_student');

Route::get('/register_student_show', 'HomeController@register_student_show')->name('register_student_show');

Route::get('/assign_teacher_course', 'HomeController@assign_teacher_course')->name('assign_teacher_course');

Route::get('/semester/{id}/courses', 'HomeController@semesterwise_courses');

Route::get('{code}/teachers', 'HomeController@assign_teacher_show');

Route::get('/admin/change_password', 'HomeController@change_password')->name('admin.change_password');
Route::post('/admin/change_password', 'HomeController@change_password_submit')->name('admin.change_password.submit');




Route::get('/student_home', 'StudentController@index')->name('student_home');
Route::get('/student/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
Route::post('/student/login', 'Auth\StudentLoginController@login')->name('student.login.submit');

Route::get('/student/logout', 'Auth\StudentLoginController@logout')->name('student.logout');

Route::get('/student_profile', 'StudentController@profile')->name('profile');
Route::get('/student_profile_update', 'StudentController@profile_1')->name('profile_update');
Route::post('/student_profile_update', 'StudentController@profile_store')->name('profile.update.submit');
Route::post('/student_profile_update_show', 'StudentController@profile_update_show')->name('profile_update_show');

Route::get('/student/change_password', 'StudentController@student_change_password')->name('student.change_password');
Route::post('/student/change_password', 'StudentController@student_change_password_submit')->name('student.change_password.submit');






Route::get('/teacher_home', 'TeacherController@index')->name('teacher_home');
Route::get('/teacher/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
Route::post('/teacher/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');

Route::get('/teacher/logout', 'Auth\TeacherLoginController@logout')->name('teacher.logout');

Route::get('/teacher_profile', 'TeacherController@profile')->name('teacher_profile');
Route::get('/teacher_profile_update', 'TeacherController@profile_update')->name('teacher_profile_update');
Route::post('/teacher_profile_update', 'TeacherController@profile_store')->name('teacher_profile.update.submit');
Route::get('/my_courses', 'TeacherController@my_courses')->name('my_courses');

Route::get('/my_courses/{code}/marks', 'TeacherController@my_specific_course_marks');
Route::post('/my_courses/{code}/marks', 'TeacherController@my_specific_course_marks_submit');

Route::get('/view_student_profile', 'TeacherController@view_student_profile')->name('view_student_profile');

Route::get('/show_student_profile', 'TeacherController@show_student_profile')->name('show_student_profile');
Route::get('/teacher_updated_profile', 'TeacherController@profile_update_show')->name('show_updated_prifile');

Route::get('/teacher/change_password', 'TeacherController@teacher_change_password')->name('teacher.change_password');
Route::post('/teacher/change_password', 'TeacherController@teacher_change_password_submit')->name('teacher.change_password.submit');
