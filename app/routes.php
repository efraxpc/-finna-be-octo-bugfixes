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

Route::get('/{ruta?}', 		array('as' 		=> 'api_contents','uses' 	=>  'PaginaController@mostrar'));

Route::get('/api/contents/articulos', 		array('as' 		=> 'api_contents','uses' 	=>  'PaginacionController@generar_paginacion_articulos'));

Route::get('/subir/multiples/imagenes/',array('as' 		=> 'subir_multiples_imagenes','uses' 	=>  'ImagenController@subirMultiplesImagenes'));

