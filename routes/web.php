<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect(route('store.index'));
    // return view('/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/mail', 'HomeController@mail');

Route::resource('store', 'StoreController');

Route::get('/store/browse/{genre}', [
    'as' => 'store.browse', 
    'uses' => 'StoreController@browse'
]);

// admin

Route::resource('manager', 'StoreManagerController');
Route::post('/manager/{album}', [
    'as' => 'manager.update', 
    'uses' => 'StoreManagerController@update'
]);

Route::post('/cart/add/{productId}', [
	'as' => 'cart.add',
	'uses' => 'CartController@addItem'
]);

Route::get('/cart/remove/{productId}', [
	'as' => 'cart.remove',
	'uses' => 'CartController@removeItem'
]);

Route::get('/cart',[
	'as' => 'cart.list',
	'uses' => 'CartController@showCart'
]);

/**
 * Checkout route
 */
Route::get('/checkout/{cart_id}',[
	'as' => 'checkout.index',
	'uses' => 'CheckoutController@index'
]);

Route::post('/checkout/store', [
	'as' => 'checkout.store',
	'uses' => 'CheckoutController@store'
]);

/**
 * End checkout route
 */
