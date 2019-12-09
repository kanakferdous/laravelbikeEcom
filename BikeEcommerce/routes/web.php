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
Route::resource('/home', 'frontend\ProductController');
Route::get('/home', 'frontend\featproController@index');
Route::get('/home', 'frontend\frontendController@index');
Route::get('/shop', 'frontend\shopController@index');
Route::get('/product/category/{category}', 'frontend\shopController@category');
Route::get('/product/brand/{brand}', 'frontend\shopController@brand');

Route::resource('/brand', 'BrandController');
Route::resource('/category', 'CategoryController');
Route::resource('/product', 'ProductController');
Route::resource('/slider', 'SliderController');
Route::resource('/division', 'DivisionController');
Route::resource('/district', 'DistrictController');
Route::resource('/social', 'SocialController');
Route::resource('/postcategory', 'postCategoryController');
Route::resource('/tag', 'tagController');
Route::resource('/post', 'postController');
Route::resource('/cart', 'cartController');