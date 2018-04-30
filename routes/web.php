<?php


Route::get('/', 'FrontController@welcome');
Route::get('/yosoyelyo', 'FrontController@yosoy');
Route::get('/lapazdelyo', 'FrontController@pazsoy');
Route::get('/acercade', 'FrontController@acerca');
Route::get('/cooreinstr', 'FrontController@cooreinstr');
Route::get('/disclaim', 'FrontController@disclaim');
Route::get('/quienesta', 'FrontController@quien');
Route::get('/', 'FrontController@welcome');
Route::get('/', 'FrontController@welcome');
Route::get('/', 'FrontController@welcome');
Route::get('/', 'FrontController@welcome');
Route::get('/', 'FrontController@welcome');
Route::get('/', 'FrontController@welcome');
Route::get('/', 'FrontController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
	Route::get('/products', 'ProductController@index'); //listado
	Route::get('/products/create', 'ProductController@create'); // formulario de nuevo producto
	Route::post('/products', 'ProductController@store'); //registrar
	Route::get('/products/{id}/edit', 'ProductController@edit'); // formulario de edicion de producto
	Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar
	Route::post('/products/{id}/del', 'ProductController@del'); // formulario de eliminacion de producto
});



//CR
//UD

