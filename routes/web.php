<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InformationController;

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

Route::get('/', [InformationController::class, 'index'])->name('information.index');