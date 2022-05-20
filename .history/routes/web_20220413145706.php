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
Route::get('/contact/all', [ContactController::class, 'contactData'])->name('contact-data');
Route::get('/contact/all/{id}', [ContactController::class, 'oneMessage'])->name('contact-data-one');
Route::get('/update/{id}', [ContactController::class, 'updatePage'])->name('contact-update-one');
Route::post('/update/{id}', [ContactController::class, 'updateData'])->name('contact-update-fin');
Route::get('/update/{id}', [ContactController::class, 'updateData'])->name('contact-update-fin');
contact-delete