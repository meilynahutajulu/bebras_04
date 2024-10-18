<?php

use App\Http\Controllers\Bebras\SocialiteController as BebrasSocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/sign-in', function () {
    return view('sign_in');
});

Route::get('/about', function () {
    return view('tentang_bebras');
});

 
Route::get('/bebras/redirect', [BebrasSocialiteController::class, 'redirect']);

Route::get('/bebras/google/callback', [BebrasSocialiteController::class, 'callback']);