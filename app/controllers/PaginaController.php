<?php
/**
 * PaginaController Class
 *
 * Clase para mostrar paginas
 */
class PaginaController extends BaseController {
    private $sParte = array();

    /**
     * Retorna la vista de inicio
     * @return callback
     */
    public function mostrar_inicio(){
        return View::make('home');
    }

    /**
     * Retorna la pagina de subir_imagen
     * @return callback
     */
    public function mostrar_subir_imagen(){
        return View::make('subir_imagen');
    }
}
