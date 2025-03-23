<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
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
=======
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

>>>>>>> 5a8861c7994b842b8402e50a166b27af2f63c374
