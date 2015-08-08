<?php 

/**
 * Modelo de tabla categoria
 */
class Caracteristica extends Eloquent{
    protected $table = 'caracteristica';

    /**
     * Obtiene todos los registros
     * @return object
     */
    /*
    public function Obtener_todos()
    {
        return DB::select('CALL caracteristica_Obtener_todos()');
    }
    */
}