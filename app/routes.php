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

Route::get('/', 		array('as' 		=> 'mostrar_inicio','uses' 	=>  'PaginaController@mostrar_inicio'));

Route::get('/subir/multiples/imagenes/',array('as' 		=> 'subir_multiples_imagenes','uses' 	=>  'PaginaController@mostrar_subir_imagen'));

Route::get('/api/contents/articulos', 	array('as' 		=> 'api_contents_articulos','uses' 	=>  'PaginacionController@generar_paginacion_articulos'));

Route::get('/api/obtener/menus', 	array('as' 		=> 'api_obtener_menus','uses' 	=>  'MenuController@elaborar_menu_principal_home'));




