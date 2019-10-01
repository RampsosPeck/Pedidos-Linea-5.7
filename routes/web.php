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
	$products = Pedidoslinea\Product::orderBy('created_at','DESC')->paginate(10);
    return view('welcome')->with(compact('products'));
});

Route::get('/muestra', function () {
    return view('muestra');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::get('/admin/products','ProductController@index');
Route::get('/admin/products/create','ProductController@create');
Route::post('/admin/products','ProductController@store');
Route::get('/admin/products/{id}/edit','ProductController@edit');
Route::post('/admin/products/{id}/edit','ProductController@update');
Route::delete('/admin/products/{id}','ProductController@destroy');

*/
//Primero para el middleware auth y despues el middleware admin
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function(){
	Route::get('/products','ProductController@index');
	Route::get('/products/create','ProductController@create');
	Route::post('/products','ProductController@store');
	Route::get('/products/{id}/edit','ProductController@edit');
	Route::post('/products/{id}/edit','ProductController@update');
	Route::delete('/products/{id}','ProductController@destroy');

	//Rutas para las imagenes
	Route::get('/products/{id}/images','ImageController@index');//listado
	Route::post('/products/{id}/images','ImageController@store');
	Route::delete('/products/{id}/images','ImageController@destroy');

	Route::get('/products/{id}/images/select/{image}','ImageController@select');


});





