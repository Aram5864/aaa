<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('home');
Route::get('/contact', function () {
    return view('contact');
})->name('home');
Route::post('/contact/submit', function () {
    return 'asd';
})->name('home');
