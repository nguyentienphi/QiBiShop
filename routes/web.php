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
Route::get('logout', 'LoginController@getLogout')->name('logout');
Route::post('postlogin', 'LoginController@login')->name('postLogin');
Route::get('register', 'RegisterController@index')->name('register');
Route::post('postRegister', 'RegisterController@store')->name('register.store');
Route::resource('profile', 'ProfileController');
Route::get('addtocart/{id}', 'CartController@addToCart')->name('themgiohang');
Route::get('view-cart', 'CartController@index')->name('view-cart');
Route::get('product-details/{id}', 'PageController@ProductDetail')->name('product-detail');
Route::get('delete-cart/{id}','CartController@deleteCart')->name('delete-cart');
Route::post('dat-hang', 'PageController@postCheckout')->name('check-oder');
Route::post('pay-product', 'PageController@payProduct')->name('pay-product');
Route::post('search', 'PageController@search')->name('search');
//đặt hàng trong giỏ hàng
Route::get('dat-hang-cart', 'OderCOntroller@index')->name('dathang');
Route::post('dat-hang-cart', 'OderCOntroller@PayCart')->name('pay-cart');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'checkAmin']], function(){
	Route::get('/', 'Admin\AdminController@index')->name('admin');
	Route::resource('loai-san-pham', 'Admin\TypeProductController');
	Route::get('delete-loai-san-pham/{id}', 'Admin\TypeProductController@destroy')->name('loai-san-pham.destroy');
	Route::resource('product', 'Admin\ProductController');
	//xóa sản phẩm
	Route::get('delete-post/{id}', 'Admin\ProductController@destroy')->name('product.destroy');
	//khu vực
	Route::get('region', 'Admin\RegionController@index')->name('region');
	Route::get('region-create', 'Admin\RegionController@create')->name('region.create');
	Route::post('region', 'Admin\RegionController@store')->name('region.store');
	Route::get('region-delete/{id}', 'Admin\RegionController@delete')->name('region.destroy');

	Route::resource('store', 'Admin\StoreController');
	Route::get('delete-store/{id}', 'Admin\StoreController@destroy')->name('store.destroy');
	Route::get('bill', 'Admin\BillController@index')->name('bill');
	Route::get('bill-details/{id}', 'Admin\BillController@show')->name('bill.show');
	Route::get('delete-bill/{id}', 'Admin\BillController@destroy')->name('bill.destroy');

	Route::get('user', 'Admin\UserController@index')->name('user');
	Route::get('delete-user/{id}', 'Admin\UserController@destroy')->name('user.destroy');
});
