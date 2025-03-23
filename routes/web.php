<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController036;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController036::class, 'index']);
Route::get('/contact', [HomeController036::class, 'contact']);

Route::get('/login', function () {
    return view('login'); // Sesuaikan dengan nama file Blade Template di resources/views/
});

Route::get('/register', function () {
    return view('register'); // Sesuaikan dengan nama file Blade Template di resources/views/
});