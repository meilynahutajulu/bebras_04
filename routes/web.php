<?php

use App\Http\Controllers\Bebras\SocialiteController as BebrasSocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/sign-in', function () {
    return view('sign_in');
});

Route::get('/tentang_bebras', function () {
    return view('tentang_bebras');
});

Route::get('/logout', function () {
    return view('dashboard');
});
 
Route::get('/bebras/redirect', [BebrasSocialiteController::class, 'redirect']);

Route::get('/bebras/google/callback', [BebrasSocialiteController::class, 'callback']);

//cookies
Route::get('/login', [BebrasSocialiteController::class, 'redirect'])->name('login');
Route::get('/login/callback', [BebrasSocialiteController::class, 'callback']);
Route::post('/logout', [BebrasSocialiteController::class, 'logout'])->name('logout');
Route::get('/dashboard', [BebrasSocialiteController::class, 'showDashboard'])->middleware('auth');
