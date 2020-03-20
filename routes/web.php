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

Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/thank-you', function () {
    return view('thank');
});

Route::get('/cart', 'CartController@index');
Route::get('/login', 'UserController@index');
Route::get('/my-account', 'UserController@profil');