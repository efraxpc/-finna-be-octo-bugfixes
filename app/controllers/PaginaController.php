<?php
/**
 * PaginaController Class
 *
 * Clase para mostrar paginas
 */
class PaginaController extends BaseController {

    /**
     * Retorna la vista de la pagina de inicio
     * @return callback
     */
    public function mostrar(){

        $sRuta = Route::input('ruta');
        if( is_null($sRuta) ){
            $sRuta = 'inicio';
        }
        return View::make($sRuta);
    }
}
