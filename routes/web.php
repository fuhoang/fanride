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

Auth::routes();

Route::get('/', function () {
    return view('templates.home');
});

/*
Route::get('/dashboard', function(){
	return view('templates.dashboard');
});
*/

// offer a ride
Route::get('/offeraride/{fixture_id}', ['as' => 'offeraride', 'uses' => 'TravelController@create']);
Route::post('/offeraride/store', 'TravelController@store');
Route::get('/offeraride/{id}/edit', 'TravelController@edit');
Route::put('/offeraride/{id}', 'TravelController@update');
Route::delete('/offeraride/delete/{id}', 'TravelController@destroy');

Route::get('/match', 'FixtureController@create');
Route::post('/match/store', 'FixtureController@store');




Route::resource('account', 'AccountController');
Route::resource('dashboard', 'DashboardController');
Route::resource('findaride', 'SearchController');

Route::get('/results/{fixture}', 'SearchController@show');

//Route::resource('password', 'Auth\ForgotPasswordController');
Route::get('/sports', 'SearchController@sports');
Route::get('/leagues/{id}', 'SearchController@leagues');
Route::get('/teams/{id}', 'SearchController@teams');
Route::get('/fixtures/{id}', 'SearchController@fixtures');


Route::get('/register/verify/{token}', 'Auth\RegisterController@verify'); 

Route::get('/account', 'AccountController@index');
//Route::get('/offeraride', 'TravelController@index');

/*
Route::get('/findaride', function(){
	return view('templates.findaride');
});
*/


Route::get('/home', 'HomeController@index');
