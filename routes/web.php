<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about');

Route::get('/discover-unique-experience', function () {
    return view('pages.discover-unique-exp');
})->name('discover-unique-exp');

Route::get('/white-glove-service', function () {
    return view('pages.white-glove-service');
})->name('white-glove-service');