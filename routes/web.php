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

Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
Route::resource('registration', 'RegistrationController');
Route::get('signin', 'SignupController@signin')->name('admin.signin');
Route::get('forgotpassword', 'SignupController@forgotpassword')->name('admin.forgotpassword');




Route::get('home', 'HomeController@index')->name('front.home');
Route::get('signup', 'SignupFrontController@signup')->name('front.signup');
Route::get('signin', 'SignupFrontController@signin')->name('front.signin');
Route::get('forgotpassword', 'SignupFrontController@forgotpassword')->name('front.forgotpassword');