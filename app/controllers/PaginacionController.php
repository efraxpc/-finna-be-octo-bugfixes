<?php
/**
 * PaginacionController Class
 *
 * Clase para manejar todas las procesos referentes a paginacion
 */
class PaginacionController extends BaseController {
    /**
	 * Retorna los registros ya paginados de una tabla articulo
	 * @return object
	 */
    public function generar_paginacion_articulos(){
        $articulo = new Articulo();
        $oElementosPaginacion = $articulo->Obtener_todos_paginacion();

        // Get pagination information and slice the results.
        $iElementpsPorPagina = 4;
        $iTotalElementosPaginacion = count($oElementosPaginacion);
        $start = (Paginator::getCurrentPage() - 1) * $iElementpsPorPagina;
        $sliced = array_slice($oElementosPaginacion, $start, $iElementpsPorPagina);

        // Eager load the relation.
        $oColeccion = Articulo::hydrate($sliced);
        //dd($oColeccion);die;

        // Create a paginator instance.
        return Paginator::make($oColeccion->all(), $iTotalElementosPaginacion, $iElementpsPorPagina);        
    }

    /**
     * Retorna articulos segun su caracteristica, ya paginados
     * @return object
     */
    public function generar_paginacion_articulos_segun_caracteristica(){
        $iIdCaracteristica = Input::get('id_caracteristica');
        //$iIdCategoria = Input::get('id_categoria');
        //dd($iIdCaracteristica);die;
        $articulo = new Articulo();
        $oElementosPaginacion = $articulo->Obtener_todos_segun_caracteristica($iIdCaracteristica);

        // Get pagination information and slice the results.
        $iElementpsPorPagina = 4;
        $iTotalElementosPaginacion = count($oElementosPaginacion);
        $start = (Paginator::getCurrentPage() - 1) * $iElementpsPorPagina;
        $sliced = array_slice($oElementosPaginacion, $start, $iElementpsPorPagina);

        // Eager load the relation.
        $oColeccion = Articulo::hydrate($sliced);

        // Create a paginator instance.
        return Paginator::make($oColeccion->all(), $iTotalElementosPaginacion, $iElementpsPorPagina);    
    }

    /* 
     * Retorna articulos segun su categoria
     * @return object
     */
    public function generar_paginacion_articulos_segun_categoria(){
        $iIdCategoria = Input::get('id_categoria');
        $articulo = new Articulo();
        $oElementosPaginacion = $articulo->Obtener_todos_segun_categoria($iIdCategoria);


        // Get pagination information and slice the results.
        $iElementpsPorPagina = 4;
        $iTotalElementosPaginacion = count($oElementosPaginacion);
        $start = (Paginator::getCurrentPage() - 1) * $iElementpsPorPagina;
        $sliced = array_slice($oElementosPaginacion, $start, $iElementpsPorPagina);

        // Eager load the relation.
        $oColeccion = Articulo::hydrate($sliced);

        // Create a paginator instance.
        return Paginator::make($oColeccion->all(), $iTotalElementosPaginacion, $iElementpsPorPagina);   
    }

    /**
     * Retorna articulos segun tag
     * @return object
     */
    public function generar_paginacion_articulos_segun_tag(){
        $sEntrada = Input::get('sEntrada');
        $oArticuloCaracteristicaValorCategoria = new ArticuloCaracteristicaValorCategoria();
        $oElementosPaginacion = $oArticuloCaracteristicaValorCategoria->Obtener_todos_segun_tag($sEntrada);
        //dd($oElementosPaginacion);die;
        // Get pagination information and slice the results.
        $iElementpsPorPagina = 4;
        $iTotalElementosPaginacion = count($oElementosPaginacion);
        $start = (Paginator::getCurrentPage() - 1) * $iElementpsPorPagina;
        $sliced = array_slice($oElementosPaginacion, $start, $iElementpsPorPagina);

        // Eager load the relation.
        $oColeccion = Articulo::hydrate($sliced);

        // Create a paginator instance.
        return Paginator::make($oColeccion->all(), $iTotalElementosPaginacion, $iElementpsPorPagina);  
    }
}
