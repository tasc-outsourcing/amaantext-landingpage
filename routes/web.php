<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');

Route::get('/terms-of-service', function () {
    return view('terms-of-service', [
        'title' => 'Terms of Service | TASC Translate',
        'description' => 'Terms of Service for the TASC AI Translator platform.',
        'canonical' => 'https://www.tasctranslate.ai/terms-of-service',
    ]);
})->name('terms-of-service');
