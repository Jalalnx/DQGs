<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userauthController;
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
    return view('users.pages.landingPage');
});
Route::get(' ', function () {
    return view('users.pages.landingPage');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/user')->group(function () {

        Route::get('/loginUser', [App\Http\Controllers\userauthController::class,'loginFrom'])->name('loginUser');
       Route::get('/singupuser', [App\Http\Controllers\userauthController::class,'singupfrom'])->name('singupuser');

       Route::post('/attemptLogin', [App\Http\Controllers\userauthController::class,'submit'])->name('attemptLogin');
    // Route::POST('/logout', [App\Http\Controllers\userauthController::class,'logout'])->name('admin.logout');

    Route::get('/Diagnosis', [App\Http\Controllers\DiagnosisController::class, 'index'])->name('Diagnosis');

    Route::get('/videos', function () {
        return view('users.pages.videos');
    });
});
