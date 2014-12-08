<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

	if (Auth::check())
	{
		return View::make('hello');
	}
	else
	{
		return View::make('log-in');
	}
});

Route::get('fbauth/{auth?}', array('as'=>'facebookAuth', 'uses'=>'AuthController@getFacebookLogin') );
Route::get('logout', array('as'=>'logout', 'uses'=>'AuthController@getLoggedOut'));

