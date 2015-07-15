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
        return Test::paginate(10);
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
