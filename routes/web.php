<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CartPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;

// Route untuk halaman utama
Route::get('/', [HomeController::class, 'index']);

// Route untuk setiap halaman dengan controller masing-masing
Route::get('/aboutus', [AboutUsController::class, 'show']);
Route::get('/cartpage', [CartPageController::class, 'show']);
Route::get('/contact', [ContactController::class, 'show']);
Route::get('/history', [HistoryController::class, 'show']);
Route::get('/home', [HomeController::class, 'show']);
Route::get('/login', [LoginController::class, 'showLogin']);
Route::get('/payment', [PaymentController::class, 'show']);
Route::get('/register', [RegisterController::class, 'show']);











//use App\Http\Controllers\HomeController036;
//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
//Route::get('/', function () {
  //  return view('welcome');
//});

//Route::get('/', [HomeController036::class, 'index']);
//Route::get('/contact', [HomeController036::class, 'contact']);
//Route::get('/login', function () {
  //  return view('login'); // Sesuaikan dengan nama file Blade Template di resources/views/
//});

//Route::get('/register', function () {
   // return view('register'); // Sesuaikan dengan nama file Blade Template di resources/views/
//});

//Route::get('/', [HomeController::class, 'index']);
//Route::get('/contact', [HomeController::class, 'contact']);


// Route::get('/', function () {
//     return view('welcome');
// });
