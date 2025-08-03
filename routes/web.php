<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;


Route::get('/', [WebController::class, 'index']);
Route::post('/login', [WebController::class, 'login']);
Route::get('/login', [WebController::class, 'loginIndex']);

Route::middleware('loggedIn')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [WebController::class, 'logout'])->name('logout');

    Route::post('/update', [HomeController::class, 'update']);
});