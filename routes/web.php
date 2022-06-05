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
    return view('welcome');
});
Route::get(' ', function () {
    return view('welcome');
});


Route::get('singup', [App\Http\Controllers\userauthController::class,'showsingupform'])->name('singup');
Route::get('login', [App\Http\Controllers\userauthController::class,'showLoginForm'])->name('login_page');
Route::post('adminlogin', [App\Http\Controllers\userauthController::class,'submit'])->name('adminlogin');
Route::POST('logout', [App\Http\Controllers\userauthController::class,'logout'])->name('admin.logout');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/user')->group(function () {

    Route::get('/Diagnosis', [App\Http\Controllers\DiagnosisController::class, 'index'])->name('Diagnosis');
});
