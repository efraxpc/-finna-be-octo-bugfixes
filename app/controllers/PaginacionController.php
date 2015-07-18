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

        // Create a paginator instance.
        return Paginator::make($oColeccion->all(), $iTotalElementosPaginacion, $iElementpsPorPagina);        
	}
}
