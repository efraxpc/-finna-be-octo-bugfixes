<?php 

/**
 * Modelo de tabla articulo
 */
class Articulo extends Eloquent{
    protected $table = 'articulo';

    /**
     * Obtiene todos los articulos optimizados (no todos los campos) para paginarlos
     * @return object
     */
    public function Obtener_todos_paginacion(){
        return DB::select('CALL articulo_Obtener_todos_paginacion()');
    }

    public function Obtener_todos_segun_caracteristica($iIdCaracteristica){
        return DB::select('CALL articulo_Obtener_todos_segun_caracteristica(?)',array($iIdCaracteristica));
    }
}