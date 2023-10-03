<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->group(function () {
    // HOME PAGE
    Route::get('/', [\App\Http\Controllers\PageController::class, 'home'])
        ->name('home');

    // CUSTOMER PAGE
    Route::resource('customer', \App\Http\Controllers\CustomerController::class)
        ->except(['show']);
});
