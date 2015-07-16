<?php

class HomeController extends BaseController {

    /**
     * Retorna la vista de la pagina de inicio
     * @return callback
     */
    public function inicio(){
        return View::make('inicio');
	}

    
	/**
	 * Retorna los pregistros ya paginados de la tabla test
	 * @return object
	 */
	public function testGet(){
        //return Test::paginate(10);
        $oTest = new Test();
        $oElementosPaginacion = $oTest->Obtener_elementos_paginacion();
        
        // Get pagination information and slice the results.
        $perPage = 4;
        $total = count($oElementosPaginacion);
        $start = (Paginator::getCurrentPage() - 1) * $perPage;
        $sliced = array_slice($oElementosPaginacion, $start, $perPage);

        // Eager load the relation.
        $collection = Test::hydrate($sliced);

        // Create a paginator instance.
        return Paginator::make($collection->all(), $total, $perPage);        
	}
}
