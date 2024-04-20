<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/', 'welcome');

Route::post('/auth', [SiteController::class, 'auth']);

Route::get('product', 'App\Http\Controllers\ProductController@index');

Route::get('/login', function() {
    if (session()->has('email')) return redirect('/product');
    // if (Auth::check()) return redirect('/product');
    return view('login');
});

Route::get('/logout', function() {
    session()->flush();
    // Auth::logout();
    return redirect('/login');
});

Route::resource('product', ProductController::class);
// Route::resource('product', ProductController::class)->middleware('auth');