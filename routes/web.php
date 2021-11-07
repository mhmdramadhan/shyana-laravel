<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes(['register' => false]);

Route::get('/', 'DashboardController@index');

Route::get('products/{id}/gallery', 'ProductController@gallery')->name('product.gallery');

Route::resource('products', 'ProductController');
Route::resource('product-galleries', 'ProductGalleryController');

Route::resource('transactions', 'TransactionController');
