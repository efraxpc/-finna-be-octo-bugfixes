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
        $obj = array();
        $oImagen = new Imagen();
        $oResultado = $oImagen->Obtener_todos();
        //$obj->picture = base64_encode($oResultado[0]->archivo);
        
        foreach ($oResultado as $key => $value) {
            $obj[$key]['picture'] = base64_encode($oResultado[$key]->archivo);
        }
        return Response::json(array('oResultado' => $obj));
    }
}
