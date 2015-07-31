<?php
/**
 * ArticuloController Class
 *
 * Clase para manejar el tema del filtro
 */
class FiltroController extends BaseController {


public function obtener_valores_caracteristicas(){
        $iIdCategoria = Input::get('id_categoria');
        $oArticuloCaracteristicaValorCategoria = new ArticuloCaracteristicaValorCategoria();
        $oResultado = $oArticuloCaracteristicaValorCategoria->Obtener_todos_valores_segun_categoria($iIdCategoria);
        return Response::json(array('oResultado' => $oResultado));
}
    /**
     * Obtiene las categorias para el filtro del front
     * @return object
     */
    public function obtener_caracteristicas(){
        $iIdCategoria = Input::get('id_categoria');
        $oArticuloCaracteristicaValorCategoria = new ArticuloCaracteristicaValorCategoria();
        $oResultado = $oArticuloCaracteristicaValorCategoria->Obtener_todos_segun_categoria($iIdCategoria);
        //dd($oResultado);die;
        return Response::json(array('oResultado' => $oResultado));
    }
}
