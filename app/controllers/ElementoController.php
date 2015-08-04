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
     * Devuelve todas las caracteristicas de acuerdo a las categorias en el menu principal home
     * @return callback
     */
    /*
    public function obtener_caracteristcas_menu_principal_home(){
        $oArticuloCaracteristicaValorCategoria = new ArticuloCaracteristicaValorCategoria();
        $oResultado = $oArticuloCaracteristicaValorCategoria->Obtener_todos_segun_menu();
        return Response::json(array('oResultado' => $oResultado));
    }
    */
}
