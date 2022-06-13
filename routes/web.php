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

Route::get('/clear', function() {
    DB::enableQueryLog();
    dd(\DB::getQueryLog());
    // Log::debug(DB::getQueryLog());
    // Artisan::call('cache:clear');
    // Artisan::call('config:clear');
    // Artisan::call('config:cache');
    // Artisan::call('view:clear');
    // Artisan::call('route:clear');

    return "Cleared!";

});


Route::get('/', function () {
    return view('users.pages.landingPage');
});
Route::get(' ', function () {
    // DB::enableQueryLog();
    // dd(\DB::getQueryLog());
    // Log::debug(DB::getQueryLog());
    return view('users.pages.landingPage');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/user')->group(function () {

        Route::get('/loginUser', [App\Http\Controllers\userauthController::class,'loginFrom'])->name('loginUser');
       Route::get('/singupuser', [App\Http\Controllers\userauthController::class,'singupfrom'])->name('singupuser');

       Route::post('/NewAcount', [App\Http\Controllers\userauthController::class,'NewAcount'])->name('NewAcount');
       Route::get('/userlogout', [App\Http\Controllers\userauthController::class,'logout'])->name('userlogout');
       Route::post('/attemptLogin', [App\Http\Controllers\userauthController::class,'submit'])->name('attemptLogin');

      Route::get('/Diagnosis', [App\Http\Controllers\DiagnosisController::class, 'index'])->name('Diagnosis')->middleware('auth:web');;
      Route::post('/DiagnosisCal', [App\Http\Controllers\DiagnosisController::class, 'DiagnosisCal'])->name('DiagnosisCal')->middleware('auth:web');;

    Route::get('/articale', function () {
        return view('users.pages.articale');
    })->name('articale');

    Route::get('/videos', function () {
        return view('users.pages.videos');
    })->name('videos');

    Route::get('/games', function () {
        return view('users.pages.games');
    })->name('games');
});
