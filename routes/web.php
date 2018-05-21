<?php


Route::get('/', 'FrontController@welcome');
Route::get('/yosoyelyo', 'FrontController@yosoy');
Route::get('/lapazdelyo', 'FrontController@pazsoy');
Route::get('/acercade', 'FrontController@acerca');
Route::get('/cooreinstr', 'FrontController@cooreinstr');
Route::get('/disclaim', 'FrontController@disclaim');
Route::get('/quienesta', 'FrontController@quien');
Route::get('/instructor', 'FrontController@instructor');
Route::get('/afiliado', 'FrontController@afilia');
Route::get('/boletin', 'FrontController@news1');
Route::get('/informa', 'FrontController@info1');
Route::get('/listacom', 'FrontController@comlist');
Route::get('/basic1area', 'FrontController@basicla');
Route::get('/videos', 'FrontController@videos');
Route::get('/canreem', 'FrontController@canreem');
Route::get('//derres', 'FrontController@derres');
Route::get('/', 'FrontController@welcome');


//payment form
Route::get('/payini', 'PaymentController@index');
// route for processing payment
Route::post('/paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('/status', 'PaymentController@getPaymentStatus')->name("status");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
	
	Route::resource('instructors', 'InstructorController');
	Route::resource('afiliates', 'AfiliaController');
	Route::resource('newsletters', 'NewsletController');

});

//CR
//UD

// PUT PATCH DELETE




