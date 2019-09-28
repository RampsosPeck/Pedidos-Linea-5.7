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
	$products = Pedidoslinea\Product::orderBy('created_at','DESC')->paginate(50);
    return view('welcome')->with(compact('products'));
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
