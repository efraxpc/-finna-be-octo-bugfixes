<?php 
class Test extends Eloquent{
    protected $table = 'test';

    public function Obtener_elementos_paginacion()
    {
        return DB::select('CALL test_Obtener_elementos_paginacion()');
    }
}