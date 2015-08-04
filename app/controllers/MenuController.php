<?php
/**
 * MenuController Class
 *
 * Clase para crear menus
 */
class MenuController extends BaseController {

    /**
     * Devuelve todas las categorias del menu home
     * @return callback
     */
    public function obtener_categorias_menu_principal_home(){
        $oCategoria = new Categoria();
        $oResultado = $oCategoria->Obtener_todos();
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
