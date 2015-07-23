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

Route::get('/api/contents/articulos', 	array('as' 	=> 'api_contents_articulos','uses' 	=>  'PaginacionController@generar_paginacion_articulos'));

Route::get('/api/obtener/categorias/menu/home', array('as' => 'api_obtener_categorias','uses'=> 'MenuController@obtener_categorias_menu_principal_home'));

Route::get('/api/obtener/caracteristicas/menu/home',array('as'=>'api_obtener_caracteristicas','uses'=> 'MenuController@obtener_caracteristcas_menu_principal_home'));

Route::post('/api/obtener/articulos/segun/caracteristica',array('as'=>'api_obtener_articulos_segun_caracteristica','uses'=> 'PaginacionController@generar_paginacion_articulos_segun_caracteristica'));

Route::post('/api/obtener/articulos/segun/categoria',array('as'=>'api_obtener_articulos_segun_categoria','uses'=> 'PaginacionController@generar_paginacion_articulos_segun_categoria'));

Route::post('/api/obtener/articulos/segun/tag',array('as'=>'api_obtener_articulos_segun_tag','uses'=> 'PaginacionController@generar_paginacion_articulos_segun_tag'));
