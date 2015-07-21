<?php
/**
 * ArticuloController Class
 *
 * Clase para manejar el tema de los productos
 */
class ArticuloController extends BaseController {

    public function obtener_articulos_segun_caracteristica(){
        $iIdCaracteristica = Input::get('id_caracteristica');
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Obtener_todos_segun_caracteristica($iIdCaracteristica);
        //dd($oResultado);die;
        return Response::json(array('oResultado' => $oResultado));
    }
}
