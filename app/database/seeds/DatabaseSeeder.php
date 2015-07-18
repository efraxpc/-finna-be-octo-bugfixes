<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TestTableSeeder');
	}

}

//clase para insertar posts
class TestTableSeeder extends Seeder {
 
    public function run()
    {
        $precio = 10;
        for($i=1;$i<=100;$i++){
            $descripcion =  'descripcion '.$i;        
            DB::table('articulo')->insert(
                array('precio' => $precio, 'descripcion' => $descripcion)
            ); 
            $precio = $precio + 100;
        }  
    }
}