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
    return view('templates.home');
});



Route::get('/dashboard', function(){
	return view('templates.dashboard');
});


Route::resource('account', 'AccountController');
Route::resource('offeraride', 'TravelController');


Route::get('/register/verify/{token}', 'Auth\RegisterController@verify'); 

Route::get('/account', 'AccountController@index');
//Route::get('/offeraride', 'TravelController@index');

Route::get('/findaride', function(){
	return view('templates.findaride');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
//Route::post('/logout','LoginController@logout');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');