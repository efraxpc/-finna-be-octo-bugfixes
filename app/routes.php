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

Route::get('/', array('as' => 'mostrar_inicio','uses' =>  'PaginaController@mostrar_inicio'));

Route::get('/subir/multiples/imagenes/',array('as' => 'subir_multiples_imagenes','uses' 	=>  'PaginaController@mostrar_subir_imagen'));

Route::get('/api/contents/articulos', 	array('as' => 'api_contents_articulos','uses' 	=>  'PaginacionController@generar_paginacion_articulos'));

Route::get('/api/obtener/categorias/menu/home', array('as' => 'api_obtener_categorias','uses'=> 'MenuController@obtener_categorias_menu_principal_home'));

Route::post('/api/obtener/articulos/segun/caracteristica',array('as'=>'api_obtener_articulos_segun_caracteristica','uses'=> 'PaginacionController@generar_paginacion_articulos_segun_caracteristica'));

Route::post('/api/obtener/articulos/segun/categoria',array('as'=>'api_obtener_articulos_segun_categoria','uses'=> 'PaginacionController@generar_paginacion_articulos_segun_categoria'));

Route::post('/api/obtener/articulos/segun/tag',array('as'=>'api_obtener_articulos_segun_tag','uses'=> 'PaginacionController@generar_paginacion_articulos_segun_tag'));

Route::post('/api-obtener-caracteristicas-valores-filtro',array('as'=>'api_obtener_caracteristicas_valores_filtro','uses'=> 'FiltroController@obtener_valores_caracteristicas'));

Route::post('/api-obtener-caracteristicas-filtro',array('as'=>'api_obtener_categorias_filtro','uses'=> 'FiltroController@obtener_caracteristicas'));

Route::get('administracion', array('as' => 'mostrar_admin','uses' 	=>  'PaginaController@mostrar_panel_admin'));

Route::get('/api-obtener-articulos-sin-paginacion', array('as' => 'api_obtener_articulos_sin_paginacion','uses' =>  'ElementoController@obtener_articulos_sin_paginacion'));

Route::post('/api-obtener-articulos-buscador-backend', array('as' => 'api_obtener_articulos_buscador_backend','uses' =>  'ElementoController@obtener_articulos_buscador_backend'));

Route::post('/api-obtener-datos-articulos-backend', array('as' => 'api_obtener_datos_articulos_backend','uses' =>  'ElementoController@obtener_datos_articulo_backend'));

Route::post('/api-obtener-categorias-condicionado-backend', array('as' => 'api_obtener_categorias_condicionado_backend','uses' =>  'ElementoController@obtener_categorias_condicionado_backend'));

Route::post('/api-obtener-historico-precios-segun-articulo', array('as' => 'api_obtener_historico_precios_segun_articulo','uses' =>  'ElementoController@obtener_historico_precios_segun_articulo'));

Route::post('/api-obtener-caracteristicas-segun-tag', array('as' => 'api_obtener_caracteristicas_segun_tag','uses' =>  'ElementoController@obtener_caracteristicas_segun_tag'));

Route::post('/api-setear-caracterisricas-articulos-backend', array('as' => 'api_setear_caracterisricas_articulos_backend','uses' =>  'ElementoController@setear_caracterisricas_articulos_backend'));

Route::post('/api-obtener-valores-caracterisricas-segun-categoria', array('as' => 'api_obtener_valores_caracterisricas_segun_categoria_backend','uses' =>  'ElementoController@obtener_valores_caracterisricas_segun_categoria_backend'));

Route::post('/api-obtener-valores-caracteristicas-articulo-backend', array('as' => 'api_obtener_valores_caracteristicas_articulo_backend','uses' =>  'ElementoController@obtener_valores_caracteristicas_articulo_backend'));

Route::post('/api-actualizar-articulo-backend', array('as' => 'api_actualizar_articulo_backend','uses' =>  'ElementoController@actualizar_articulo_backend'));

Route::post('/api-obtener-todas-categorias-backend', array('as' => 'api_obtener_todas_categorias_backend','uses' =>  'ElementoController@api_obtener_todas_categorias_backend'));

Route::post('/api-setear-categorias-backend', array('as' => 'api_setear_categorias_backend','uses' =>  'ElementoController@api_setear_categorias_backend'));

Route::post('/api-obtener-caracteristicas-segun-cat-mto-articulos-backend', array('as' => 'api_obtener_caracteristicas_segun_cat_mto_articulos_backend','uses' =>  'ElementoController@api_obtener_caracteristicas_segun_cat_mto_articulos_backend'));

Route::post('/api-setear-articulo-backend', array('as' => 'api_setear_articulo_backend','uses' =>  'ElementoController@api_setear_articulo_backend'));

Route::get('/api-obtener-todas-las-categorias-backend', array('as' => 'api_obtener_todas_las_categorias_backend','uses' 	=>  'ElementoController@api_obtener_todas_las_categorias_backend'));

Route::post('/api-obtener-articulos-paginados-segun-filtro', array('as' => 'api_obtener_articulos_paginados_segun_filtro','uses' =>  'PaginacionController@api_obtener_articulos_paginados_segun_filtro'));

Route::get('/borrar-tablas', array('as' => 'borrar_tablas','uses' 	=>  'BaseController@borrar_tablas'));

Route::post('/api-subir-imagenes-multiple-backend', array('as' => 'api_subir_imagenes_multiple_backend','uses' =>  'ElementoController@api_subir_imagenes_multiple_backend'));


/*
Route::get('/admin2', function()
{
	echo "tollo";
});
*/