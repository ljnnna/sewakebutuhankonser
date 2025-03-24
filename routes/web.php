<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController036;
use App\Http\Controllers\HomeController;
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/cartpage', function () {
    return view('cartpage');
});

//Route::get('/', [HomeController036::class, 'index']);
//Route::get('/contact', [HomeController036::class, 'contact']);

// Route::get('/login', function () {
//     return view('login'); // Sesuaikan dengan nama file Blade Template di resources/views/
// });

// Route::get('/register', function () {
//     return view('register'); // Sesuaikan dengan nama file Blade Template di resources/views/
// });

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contach', [HomeController::class, 'index']);
//Route::get('/contact', [HomeController::class, 'contact']);


Route::get('/payment', function () {
    return view('payment');
});

Route::get('/history', function () {
    return view('history');
});
