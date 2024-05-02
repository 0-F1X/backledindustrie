<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;

// Page d'accueil
Route::get('/', function () {
    return view('index');
});

// Vue admin
Route::get('/admin', function () {
    return view('admin');
});

// Envoyer un message
Route::post('/envoyer-message', [MessageController::class, 'store'])->name('envoyer.message');

// Authentification
Auth::routes();


// Accueil avec les messages
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Images
Route::prefix('admin')->group(function () {
    Route::get('/images', [ImageController::class, 'index'])->name('images.index');
    Route::post('/images', [ImageController::class, 'store'])->name('images.store');
    Route::delete('/images/{image}', [ImageController::class, 'destroy'])->name('images.destroy');
});

// Définir une route distincte pour charger les messages
Route::get('/messages', [MessageController::class, 'showMessages'])->name('messages');

// Infos
Route::post('/store-information', [HomeController::class, 'storeInformation'])->name('store.information');
