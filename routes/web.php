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
    return view('home');
});

//Route::get('home','HomeController@index');
Route::get('about','AboutController@index');
Route::get('contact','ContactController@index');
Route::get('gallary','GallaryController@index');
Route::get('services','ServicesController@index');
Route::get('trainer','TrainerController@index');
Route::get('signup','SignupController@index');
Route::get('login','LoginController@index');
Route::get('userdetail','UserDetailController@index');
Route::get('login/forgotpassword','ForgotPasswordController@index');