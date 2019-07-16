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
Route::post('registration/{id}/restore', 'RegistrationController@restore')->name('registration.restore');
Route::delete('registration/{id}/delete', 'RegistrationController@delete')->name('registration.delete');
Route::resource('doctor', 'DoctorController');
Route::get('addsignin', 'SignupController@addsignin')->name('admin.addsignin');
Route::get('addforgotpassword', 'SignupController@addforgotpassword')->name('admin.addforgotpassword');




Route::get('home', 'HomeController@index')->name('front.home');
Route::get('signup', 'SignupFrontController@signup')->name('front.signup');
Route::get('signin', 'SignupFrontController@signin')->name('front.signin');
Route::get('forgotpassword', 'SignupFrontController@forgotpassword')->name('front.forgotpassword');