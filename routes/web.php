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

Route::get('/','PageController@index')->name('trangchu');
Route::get('productType/{id}','PageController@type_product')->name('productType');
Route::get('login', 'LoginController@index')->name('login');
Route::get('register', 'RegisterController@index')->name('register');
Route::post('postRegister', 'RegisterController@store')->name('register.store');
