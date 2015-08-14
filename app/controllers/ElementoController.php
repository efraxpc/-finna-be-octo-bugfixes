<?php
/**
 * MenuController Class
 *
 * Clase para crear menus
 */
class ElementoController extends BaseController {

    /**
     * Devuelve todas las categorias del menu home
     * @return object
     */
    public function obtener_articulos_sin_paginacion(){
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Obtener_todos_sin_paginacion();
        return Response::json(array('oResultado' => $oResultado));
    }

    /**
     * Obtiene todos los articulos segun buscador en backend
     * @return object
     */
    public function obtener_articulos_buscador_backend(){
        $sTextoBuscador = Input::get('sTextoBuscador');
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Obtener_articulos_buscador_backend($sTextoBuscador);
        return Response::json(array('oResultado' => $oResultado));
    }

    /**
     * Obtener datos de un articulo dato
     * @return object
     */
    public function obtener_datos_articulo_backend(){
        $sIdArticulo = Input::get('sIdArticulo');
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Obtener_datos_articulo_backend($sIdArticulo);
        return Response::json(array('oResultado' => $oResultado[0]));
    }

    /**
     * Obtiene las categorias de un articulo, menos la seleccionada enel mismo
     * @return object
     */
    public function obtener_categorias_condicionado_backend(){
        $sIdArticulo = Input::get('sIdArticulo');
        $oCategoria = new Categoria();
        $oResultado = $oCategoria->Obtener_todos_condicionado($sIdArticulo);
        return Response::json(array('oResultado' => $oResultado));
    }   

    /**
     * Obtiene el historico de precios de un ariculo dado
     * @return object
     */
    public function obtener_historico_precios_segun_articulo(){
        $sIdArticulo = Input::get('sIdArticulo');
        $oHistoricoPrecios = new HistoricoPrecios();
        $oResultado = $oHistoricoPrecios->Obtener_segun_articulo($sIdArticulo);
        return Response::json(array('oResultado' => $oResultado));
    }

    /**
     * Obtiene categorias segun 1 caracteristica, se usa en el buscador de agregar/editar articulos
     * @return object
     */
    public function obtener_caracteristicas_segun_tag(){
        $sTextoBuscadorCaracteristicas = Input::get('sTextoBuscadorCaracteristicas');
        $sCategoria = Input::get('sCategoria');
        $oCategoriaCaracteristica = new CategoriaCaracteristica();
        $oResultado = $oCategoriaCaracteristica->Obtener_segun_categoria_y_caracteristica($sCategoria, $sTextoBuscadorCaracteristicas);
        return Response::json(array('oResultado' => $oResultado));
    }

    /**
     * Setea los valores de caracteriscias nuevos, en caso de ya existir dichos valores no hace nada
     */
    public function setear_caracterisricas_articulos_backend(){
        $sValorCaracteristica = Input::get('sValorCaracteristica');
        $sIdCategoria = Input::get('sIdCategoria');
        $sIdCaracteristica = Input::get('sIdCaracteristica');
        $sIdArticulo = Input::get('sIdArticulo');
        $oCategoriaCaracteristica = new CategoriaCaracteristica();
        $oResultado = $oCategoriaCaracteristica->Setear_segun_categoria($sValorCaracteristica,$sIdCategoria,$sIdCaracteristica,$sIdArticulo); 
        return Response::json(array('oResultado' => $oResultado));

    }

    /**
     * Obtiene todas las caracteristicas de una categoria, aplicada al mentenimeinto de articulos
     * @return object
     */
    public function obtener_valores_caracterisricas_segun_categoria_backend(){
        $sIdArticulo = Input::get('sIdArticulo');
        $oCategoriaCaracteristica = new CategoriaCaracteristica();
        $oResultado = $oCategoriaCaracteristica->Obtener_caracteristicas_segun_categoria($sIdArticulo);  
        return Response::json(array('oResultado' => $oResultado));
    }

    /**
     * Obtiene todas las caracteristicas asociadas a un articulo
     * @return object
     */
    public function obtener_valores_caracteristicas_articulo_backend(){
        $sIdArticulo = Input::get('sIdArticulo');
        $oCategoriaCaracteristica = new CategoriaCaracteristica();
        $oResultado = $oCategoriaCaracteristica->Obtener_valores_segun_articulo($sIdArticulo);  
        return Response::json(array('oResultado' => $oResultado));
    }

    /**
     * Modifica un articulo
     * @return object
     */
    public function actualizar_articulo_backend(){
        $sTitulo = Input::get('sTitulo');
        $sDescripcion = Input::get('sDescripcion');
        $iCategoria = Input::get('iCategoria');
        $iHabilitado = Input::get('iHabilitado');
        $sIdArticulo = Input::get('sIdArticulo');
        $sPrecio = Input::get('sPrecio');
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Actualizar_backend($sTitulo,$sDescripcion,$iCategoria,$iHabilitado,$sIdArticulo,$sPrecio);  
        return Response::json(array('oResultado' => $oResultado));        
    }

    /**
     * Setea una categoria a un articulo
     * @return object
     */
    public function api_setear_categorias_backend(){
        $sIdArticulo = Input::get('sIdArticulo');
        $iIdCategoria = Input::get('iIdCategoria');
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Setear_categoria($sIdArticulo,$iIdCategoria);  
        return Response::json(array('oResultado' => $oResultado));
    }

    /**
     * Obtiene las caracteristicas que van a ser mostradas en la seccion secundaria,justo cuando le usamos el combobox en agregar articulo, donde se muestra la seccion secundaria
     * @return object
     */
    public function api_obtener_caracteristicas_segun_cat_mto_articulos_backend(){
        $iIdCategoria = Input::get('iIdCategoria');
        $oCategoriaCaracteristica = new CategoriaCaracteristica();
        $oResultado = $oCategoriaCaracteristica->Obtener_valores_segun_categoria($iIdCategoria);  
        return Response::json(array('oResultado' => $oResultado));        
    }
    /**
     * Setea un articulo en el backend
     * @return object donde valida si ingresaste o no varios campos
     */
    public function api_setear_articulo_backend(){
        $sTitulo = Input::get('sTitulo');
        $iIdCategoria = Input::get('iCategoria');
        $sDescripcion = Input::get('sDescripcion');
        $iHabilitado = Input::get('iHabilitado');
        $sPrecio = Input::get('sPrecio');
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Setear_backend($sTitulo,$sDescripcion,$sPrecio,$iIdCategoria,$iHabilitado);  
        return Response::json(array('oResultado' => $oResultado));
    }

    public function api_obtener_todas_las_categorias_backend(){
        $oCategoria = new Categoria();
        $oResultado = $oCategoria->Obtener_todos();
        return Response::json(array('oResultado' => $oResultado));
    }
}