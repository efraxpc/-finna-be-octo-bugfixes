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
    public function api_obtener_articulos_buscador_backend(){
        $sTextoBuscador = Input::get('sTextoBuscador');
        //dd($sTextoBuscador);die;
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Obtener_articulos_buscador_backend($sTextoBuscador);
        //dd($oResultado);die;
        return Response::json(array('oResultado' => $oResultado));
    }
}
