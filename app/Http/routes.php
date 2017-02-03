<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('templates.home');
});

Route::auth();

Route::get('/dashboard', function(){
	return view('templates.dashboard');
});

Route::get('/account', function(){
	return view('templates.account');
});

Route::get('/offeraride', function(){
	return view('templates.offeraride');
});

Route::get('/findaride', function(){
	return view('templates.findaride');
});