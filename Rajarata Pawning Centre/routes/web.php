<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

Route::get('language/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'si'])) {
        abort(400); // Invalid locale
    }

    Session::put('locale', $locale);  // Store locale in session
    App::setLocale($locale);          // Set application locale

    return Redirect::back();          // Redirect back to the previous page
});


Route::get('/', function () {
    return view('pages.home'); // Points to resources/views/pages/home.blade.php
})->name('home'); // Name the route 'home'

Route::get('/services', function () {
    return view('pages.services'); // Points to resources/views/pages/services.blade.php
})->name('services');

Route::get('/about', function () {
    return view('pages.about'); // Points to resources/views/pages/about.blade.php
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact'); // Points to resources/views/pages/contact.blade.php
})->name('contact');
