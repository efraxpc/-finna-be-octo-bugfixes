<?php 

/**
 * Modelo de tabla categoria
 */
class Categoria extends Eloquent{
    protected $table = 'categoria';

    /**
     * Obtiene todos los registros
     * @return object
     */
    public function Obtener_todos()
    {
        return DB::select('CALL categoria_Obtener_todos()');

    }
}