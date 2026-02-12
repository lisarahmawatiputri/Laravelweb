<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/cards', function () {
    return view('cards');
})->name('cards');

Route::get('/charts', function () {
    return view('charts');
})->name('charts');


