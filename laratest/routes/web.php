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
    return view('test');
});



Route::get('/register', 'registrationController@registration')->name('registration.registration');
Route::post('/register', 'registrationController@postRegistration')->name('registration.registration');
Route::get('/login', 'LoginController@index');
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/logout', ['uses'=>'logoutController@index']);




Route::middleware(['sess'])->group(function(){

	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/employeer/index', 'employeerController@index')->name('employeer.index');
	Route::get('/employeer/createJob', 'employeerController@create')->name('employeer.create');
	Route::post('/employeer/createJob', 'employeerController@store');
	Route::get('/employeer/edit/{id}', 'employeerController@edit');
	Route::post('/employeer/edit/{id}', 'employeerController@update');
	Route::get('/employeer/delete/{id}', 'employeerController@delete');
	Route::post('/employeer/delete/{id}', 'employeerController@destroy');

	Route::group(['middleware'=>['type']], function(){
		Route::get('/home/edit/{id}', 'HomeController@edit');
		Route::post('/home/edit/{id}', 'HomeController@update');
		Route::get('/home/delete/{id}', 'HomeController@delete');
		Route::post('/home/delete/{id}', 'HomeController@destroy');
		Route::get('/home/create', 'HomeController@create')->name('home.create');
		Route::post('/home/create', 'HomeController@store');
	});
});

