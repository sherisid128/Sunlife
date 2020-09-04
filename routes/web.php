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

Route::get('/', 'PagesController@index');
Route::get('/forgetPassword', 'PagesController@forgotPass');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('howto','PagesController@howto');
Route::get('/help', 'PagesController@help');
Route::get('/dcvault','DocumentController@index');

Route::resource('employee','EmployeeController');
Route::post('/employee/uploadDoc','DocumentController@store');
Route::post('/employee/uploadCert','CertificationController@store');