<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('aboutus');
});

Route::get('/', function () {
    return view('cartpage');
});
