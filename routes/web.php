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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group([
    'middleware' => 'auth'
], function () {
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('settings', 'SettingController');

Route::resource('positions', 'PositionController');

Route::resource('users', 'UserController');

Route::get('change_password', 'UserController@change_password')->name('change_password');

Route::post('change_password_update', 'UserController@change_password_update')->name('change_password_update');

Route::resource('selectionStatuses', 'SelectionStatusController');

Route::resource('references', 'ReferenceController');

Route::resource('medicalStatuses', 'MedicalStatusController');

Route::resource('passports', 'PassportController');


Route::resource('medicalReports', 'MedicalReportController');

Route::resource('agents', 'AgentController');

Route::resource('mycontes', 'MyconteController');

Route::resource('payments', 'PaymentController');

Route::get('payment_report', 'PaymentController@report')->name('payment_report');

});