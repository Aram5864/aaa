<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->home();
Route::get('/about', function () {
    return view('about');
})->about();
Route::get('/contact', function () {
    return view('contact');
})->contact();
Route::post('/contact/submit', function () {
    return 'asd';
})->contact();
