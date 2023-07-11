<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify-account', [App\Http\Controllers\HomeController::class, 'verifyaccount'])->name('verifyAccount');
Route::post('/verifyotp', [App\Http\Controllers\HomeController::class, 'useractivation'])->name('verifyotp');
Route::get('/resend-otp', [App\Http\Controllers\HomeController::class, 'resendOtp'])->name('resend.otp');
