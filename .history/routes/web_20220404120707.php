<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->home();
Route::get('/about', function () {
    return view('about');
})->home();
Route::get('/contact', function () {
    return view('contact');
})->home();
Route::post('/contact/submit', function () {
    return 'asd';
});
