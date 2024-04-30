<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post('/envoyer-message', [MessageController::class, 'store'])->name('envoyer.message');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [MessageController::class, 'showMessages'])->name('home');

/* Images */
Route::get('/admin/images', [ImageController::class, 'index'])->name('images.index');
Route::post('/admin/images', [ImageController::class, 'store'])->name('images.store');
Route::delete('/admin/images/{image}', [ImageController::class, 'destroy'])->name('images.destroy');
/* Tapitra */