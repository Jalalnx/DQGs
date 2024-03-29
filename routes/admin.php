<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Auth\LoginController;
use App\Http\Controllers\admin\diseasCotroller;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\QuestionController;
use App\Http\Controllers\admin\ResultController;
use App\Http\Controllers\admin\gamesControllergamesController;

Route::group(['namespace' => 'admin',], function () {
    // Authentication Routes...
    Route::get('login', [App\Http\Controllers\admin\Auth\LoginController::class,'showLoginForm'])->name('login_page');
    Route::post('adminlogin', [App\Http\Controllers\admin\Auth\LoginController::class,'submit'])->name('adminlogin');
    Route::POST('logout', [App\Http\Controllers\admin\Auth\LoginController::class,'logout'])->name('admin.logout');



    Route::group([ 'middleware' => ['auth:admin',],], function () {

        Route::get(' ', [App\Http\Controllers\admin\AdminController::class,'index']);
        Route::get('dashboard', [App\Http\Controllers\admin\AdminController::class,'index'])->name('dashboard');

        Route::get('diseas', [App\Http\Controllers\admin\diseasCotroller::class, 'index'])->name("admin.diseas");
        Route::get('diseas/list', [App\Http\Controllers\admin\diseasCotroller::class, 'fecthdata'])->name('diseas.list');
        Route::post('diseas/add', [App\Http\Controllers\admin\diseasCotroller::class, 'store'])->name('diseas.add');
        Route::DELETE('diseas/movetoTrash/{id}', [App\Http\Controllers\admin\diseasCotroller::class, 'destroy'])->name('diseas.movetoTrash');


        Route::get('Question', [App\Http\Controllers\admin\QuestionController::class, 'index'])->name("admin.Question");
        Route::get('Question/list', [App\Http\Controllers\admin\QuestionController::class, 'fecthdata'])->name("Question.list");
        Route::DELETE('Question/movetoTrash/{id}', [App\Http\Controllers\admin\QuestionController::class, 'destroy'])->name('Question.movetoTrash');
       Route::post('Question/add', [App\Http\Controllers\admin\QuestionController::class, 'store'])->name('Question.add');


        Route::get('Result', [App\Http\Controllers\admin\ResultController::class, 'index'])->name("admin.Result");
        Route::get('Result/list', [App\Http\Controllers\admin\ResultController::class, 'Result_Ftech'])->name("Result.list");



        Route::get('games', [App\Http\Controllers\admin\gamesController::class, 'index'])->name("admin.games");
        Route::post('games', [App\Http\Controllers\admin\gamesController::class, 'store'])->name("games.add");
        Route::get('games/list', [App\Http\Controllers\admin\gamesController::class, 'getGames'])->name("games.list");
        Route::DELETE('games/destroy/{id}', [App\Http\Controllers\admin\gamesController::class, 'destroy'])->name("games.destroy");


        Route::get('articales', [App\Http\Controllers\admin\ArticaleController::class, 'index'])->name("admin.articales");
        Route::post('articales', [App\Http\Controllers\admin\ArticaleController::class, 'store'])->name("articales.add");
        Route::get('articales/list', [App\Http\Controllers\admin\ArticaleController::class, 'articale'])->name("articales.list");
        Route::DELETE('articales/destroy/{id}', [App\Http\Controllers\admin\ArticaleController::class, 'destroy'])->name("articales.destroy");


        Route::get('videos', [App\Http\Controllers\admin\videosController::class, 'index'])->name("admin.videos");
        Route::post('videos', [App\Http\Controllers\admin\VideosController::class, 'store'])->name("videos.add");
        Route::get('videos/list', [App\Http\Controllers\admin\VideosController::class, 'getvideos'])->name("videos.list");
        Route::DELETE('videos/destroy/{id}', [App\Http\Controllers\admin\VideosController::class, 'destroy'])->name("videos.destroy");


});

});

