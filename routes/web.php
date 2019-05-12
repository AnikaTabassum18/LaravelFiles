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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
*/
Route::get('/', 'HomeController@index');
Route::get('/product/details/{product_id}','HomeController@productDetails');
Route::get('/contact', function () {
    return view('contact');
});
Route::post('product/submitRating', 'ProductController@submitRating');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
