<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactController;

// Page d'accueil
Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

// Page À propos
Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

// Page Contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Legal Notice page
Route::get('/legal-notice', function () {
    return Inertia::render('LegalMentions');
})->name('legal');

