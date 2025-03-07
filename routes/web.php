<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


// Show the password reset request form
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

// Handle the password reset link email submission
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

// Show the password reset form
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

// Handle the password reset form submission
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


// Show the password reset form
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');



Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
