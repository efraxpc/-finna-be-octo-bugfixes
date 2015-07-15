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
	return View::make('inicio');
});


Route::get('api/contents/', 		array('as' 		=> 'api_contents','uses' 	=>  'HomeController@testGet'));
Route::get('llenar/tabla/test', 	array('as' 		=> 'llenar_tabla_test','uses' 	=>  'HomeController@llenar_tabla_test'));