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
     * Retorna el administrador
     * @return callback
     */
    public function mostrar_panel_admin(){
        return View::make('admin');
    }
}
