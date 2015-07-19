<?php
/**
 * MenuController Class
 *
 * Clase para crear menus
 */
class MenuController extends BaseController {
    
    public function elaborar_menu_principal_home(){
        $oCategoria = new Categoria();
        $oResultado = $oCategoria->Obtener_todos();
        return Response::json(array('oResultado' => $oResultado));
    }
}
