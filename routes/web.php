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

Route::get('/muestra', function () {
    return view('muestra');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products','ProductController@index');
Route::get('/admin/products/create','ProductController@create');
Route::post('/admin/products','ProductController@store');
Route::get('/admin/products/{id}/edit','ProductController@edit');
Route::post('/admin/products/{id}/edit','ProductController@update');
Route::delete('/admin/products/{id}','ProductController@destroy');







