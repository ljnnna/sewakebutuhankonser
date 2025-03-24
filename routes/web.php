<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', [HomeController::class, 'index']);
//Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/', function () {
    return view('payment');
});

Route::get('/', function () {
    return view('history');
});
