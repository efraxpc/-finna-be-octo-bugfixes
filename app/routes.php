<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('todos/', 		array('as' 		=> 'todo','uses' 	=>  'HomeController@testGet'));

Route::get('api/contents', function(){
    return Contents::paginate(10);
});

Route::get('feeds',function(){

    for($i=1;$i<=100;$i++){
        $contenido = 'contenido '.$i;
        $orden =  $i;        
        DB::table('contents')->insert(
            array('conteudo' => $contenido, 'orden' => $orden)
        );    
    }
});