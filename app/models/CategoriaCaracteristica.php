<?php 

/**
 * Modelo de tabla categoria_caracteristica
 */
class CategoriaCaracteristica extends Eloquent{
    protected $table = 'categoria_caracteristica';

    /**
     * Obtiene todos los registros
     * @return object
     */
    public function Obtener_todos()
    {
        return DB::select('CALL categoria_caracteristica_Obtener_todos()');

    }
}