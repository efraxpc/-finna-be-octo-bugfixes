<?php
/**
 * ImagenController Class
 *
 * Clase para manejar el tema de las imagenes
 */
class ImagenController extends BaseController {

    /**
     * Sube multiples imagenes
     * @return callback
     */
    public function subirMultiplesImagenes(){
        
        return View::make('subir_imagen');
	}
}
