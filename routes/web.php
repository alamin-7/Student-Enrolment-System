<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/admin', function () {
    return view('admin.adminLogin');
});

Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
Route::get('/allstudent', 'AdminController@allstudent');
//Route::post('/addstudent', 'AdminController@add_student');
//Route::get('/addstudent','AdminController@show_add_student');
Route::get('addstudent', 'AdminController@show_add_student');
Route::post('addstudent', 'AdminController@add_student');
Route::get('/addstudent/{student_id}/edit','AdminController@edit');
Route::post('/addstudent/{student_id}','AdminController@update');

