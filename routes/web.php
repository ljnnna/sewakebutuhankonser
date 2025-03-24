<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

use App\Http\Controllers\HomeController036;
=======
//use App\Http\Controllers\HomeController036;
use App\Http\Controllers\HomeController;
Auth::routes();
>>>>>>> ae5477a35521970f958c21bf7587991740380878

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/', [HomeController036::class, 'index']);
Route::get('/contact', [HomeController036::class, 'contact']);
=======
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/cartpage', function () {
    return view('cartpage');
});

//Route::get('/', [HomeController036::class, 'index']);
//Route::get('/contact', [HomeController036::class, 'contact']);
>>>>>>> ae5477a35521970f958c21bf7587991740380878

// Route::get('/login', function () {
//     return view('login'); // Sesuaikan dengan nama file Blade Template di resources/views/
// });

<<<<<<< HEAD
Route::get('/register', function () {
    return view('register'); // Sesuaikan dengan nama file Blade Template di resources/views/
});
=======
// Route::get('/register', function () {
//     return view('register'); // Sesuaikan dengan nama file Blade Template di resources/views/
// });
>>>>>>> ae5477a35521970f958c21bf7587991740380878

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/katalog', function () {
    return view('katalog');
});

use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);


