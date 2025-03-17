<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\ThesisController;
use App\Http\Controllers\AdminAuthController;


Auth::routes();


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

Route::get('/', function () { 
    return view('welcome'); 
})->name('welcome');


Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::resource('theses', ThesisController::class);
});

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware('auth:admin')->group(function () {
    Route::resource('/admin/theses', ThesisController::class)->names([
        'index' => 'admin.theses.index',
        'create' => 'admin.theses.create',
        'store' => 'admin.theses.store',
        'show' => 'admin.theses.show',
        'edit' => 'admin.theses.edit',
        'update' => 'admin.theses.update',
        'destroy' => 'admin.theses.destroy',
    ]);
});

