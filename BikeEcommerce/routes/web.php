<?php

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

Route::get('/admin', 'backendController@index');
Route::get('/home', 'frontend\frontendController@index');

Route::resource('/brand', 'BrandController');
Route::resource('/category', 'CategoryController');
Route::resource('/product', 'ProductController');
Route::resource('/product_image', 'imageContorller');