<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
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
    
    public function llenar_tabla_test(){
        $precio = 10;
        for($i=1;$i<=100;$i++){
            $descripcion =  'descripcion '.$i;        
            DB::table('test')->insert(
                array('precio' => $precio, 'descripcion' => $descripcion)
            ); 
            $precio = $precio + 100;
        }        
    }
}
