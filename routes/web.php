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
Route::get('/work_reports', 'WorkingReportsController@index');

Route::get('/work_reports/create', 'WorkingReportsController@create');

Route::post('/work_reports/store', 'WorkingReportsController@store');

Route::get('/employees', 'EmployeesController@index');