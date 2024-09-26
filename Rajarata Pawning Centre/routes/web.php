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

Route::get('/', function () {
    return view('home');
});

// Route for Services Page
Route::get('/services', function () {
    return view('services'); // Returns the services.blade.php view
})->name('services');

// Route for About Page
Route::get('/about', function () {
    return view('about'); // Returns the about.blade.php view
})->name('about');

// Route for Contact Page
Route::get('/contact', function () {
    return view('contact'); // Returns the contact.blade.php view
})->name('contact');
