<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Auth\LoginController;

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
