<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bacamba', function () {
    return view('bacamba');
});

Route::get('/bacarus', function () {
    return view('bacarus');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/contact', function () {
    return view('kontak');
});


