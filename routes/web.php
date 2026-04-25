<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('portfolio');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
// This allows a maximum of 3 emails per minute per IP address
Route::post('/contact', [ContactController::class, 'send'])->middleware('throttle:3,1');