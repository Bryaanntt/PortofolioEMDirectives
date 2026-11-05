<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
