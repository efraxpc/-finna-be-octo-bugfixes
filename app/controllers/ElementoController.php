<?php
/**
 * MenuController Class
 *
 * Clase para crear menus
 */
class ElementoController extends BaseController {

    /**
     * Devuelve todas las categorias del menu home
     * @return callback
     */
    public function obtener_articulos_sin_paginacion(){
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Obtener_todos_sin_paginacion();
        return Response::json(array('oResultado' => $oResultado));
    }

    /**
     * Obtiene todos los articulos segun buscador en backend
     * @return callback
     */
    public function obtener_articulos_buscador_backend(){
        $sTextoBuscador = Input::get('sTextoBuscador');
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Obtener_articulos_buscador_backend($sTextoBuscador);
        return Response::json(array('oResultado' => $oResultado));
    }

    /**
     * Obtener datos de un articulo dato
     * @return callback
     */
    public function obtener_datos_articulo_backend(){
        $sIdArticulo = Input::get('sIdArticulo');
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Obtener_datos_articulo_backend($sIdArticulo);
        return Response::json(array('oResultado' => $oResultado[0]));
    }
}
