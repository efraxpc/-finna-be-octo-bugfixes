<?php 

/**
 * Modelo de tabla Imagen
 */
class Imagen extends Eloquent{
    protected $table = 'imagen';

    /**
     * Obtiene todos los registros
     * @return object
     */
    public function Obtener_todos()
    {
        return DB::select('CALL imagen_Obtener_todos()');
    }
}