<?php
/**
 * ArticuloController Class
 *
 * Clase para manejar el tema del filtro
 */
class FiltroController extends BaseController {

    public function obtener_caracteristcas_segun_categoria(){
        $iIdCaracteristica = Input::get('id_caracteristica');
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Obtener_caracteristcas_segun_categoria($iIdCaracteristica);
        return Response::json(array('oResultado' => $iIdCaracteristica));
    }
    public function obtener_categorias(){
        $oCategoria = new Categoria();
        $oResultado = $oCategoria->Obtener_todos();
        return Response::json(array('oResultado' => $oResultado));
    }
}
