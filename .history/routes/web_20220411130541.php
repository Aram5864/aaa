<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-submit');
Route::get('/contact/submit', [ContactController::class, 'ContactData'])->name('contact-data');
