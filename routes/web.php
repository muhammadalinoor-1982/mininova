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
Route::get('addsignin', 'SignupController@addsignin')->name('admin.addsignin');
Route::get('addforgotpassword', 'SignupController@addforgotpassword')->name('admin.addforgotpassword');

Route::resource('registration', 'RegistrationController');
Route::post('registration/{id}/restore', 'RegistrationController@restore')->name('registration.restore');
Route::delete('registration/{id}/delete', 'RegistrationController@delete')->name('registration.delete');

Route::resource('doctor', 'DoctorController');
Route::post('doctor/{id}/restore', 'DoctorController@restore')->name('doctor.restore');
Route::delete('doctor/{id}/delete', 'DoctorController@delete')->name('doctor.delete');

Route::resource('source', 'SourceController');
Route::post('source/{id}/restore', 'SourceController@restore')->name('source.restore');
Route::delete('source/{id}/delete', 'SourceController@delete')->name('source.delete');


//Route::get('test', 'DashboardController@test')->name('admin.test');





Route::get('home', 'HomeController@index')->name('front.home');
Route::get('signup', 'SignupFrontController@signup')->name('front.signup');
Route::get('signin', 'SignupFrontController@signin')->name('front.signin');
Route::get('forgotpassword', 'SignupFrontController@forgotpassword')->name('front.forgotpassword');