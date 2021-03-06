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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Route::view('/','landing');
//Route::view('/products','products');
//Route::view('/product','product');
//Route::view('/cart','cart');
//Route::view('/checkout','checkout');
//Route::view('/thankyou','thankyou');
Route::resource('/products','ProductController');
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/categories','Admin\CategoryController');
});

Route::get('/home', 'HomeController@index')->name('home');
