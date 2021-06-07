<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME
Route::get('/', function () {
    return view('home');
});

// ABOUT
Route::get('/about', function () {
    return view('about');
});

// PRODUCTS
Route::get('/products', function () {
    return view('products');
});

// CONTACTS
Route::get('/contacts', function () {
    return view('contacts');
});
