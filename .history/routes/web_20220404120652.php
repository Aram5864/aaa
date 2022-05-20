<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->home();
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact/submit', function () {
    return 'asd';
});
