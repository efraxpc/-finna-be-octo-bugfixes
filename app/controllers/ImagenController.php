<?php
/**
 * ImagenController Class
 *
 * Clase para manejar el tema de las imagenes
 */
class ImagenController extends BaseController {

    /**
     * Obtiene las imagenes correspondientes
     * @return object
     */
    public function obtener(){
        $obj = new stdClass();
        $oImagen = new Imagen();
        $oResultado = $oImagen->Obtener_todos();
        //dd($oResultado[0]->archivo);die;
        $obj->picture = base64_encode($oResultado[0]->archivo);
        return Response::json(array('oResultado' => $obj));
    }
}
