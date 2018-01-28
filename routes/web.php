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
    return view('dashboard.index');
});


Route::resource('report', 'ReportController');

Route::resource('student', 'StudentController');

Route::resource('subject', 'SubjectController');

Route::get('student/manage/{id}', 'StudentGradesController@student');

Route::get('student/report/{id}', 'StudentGradesController@report');

Route::post('student/remove', 'StudentGradesController@remove');