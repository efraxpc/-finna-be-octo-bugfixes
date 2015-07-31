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

    /**
     * Obtiene todos los articulos segun su caracteristica     
     * @param  integer $iIdCategoria
     * @param  integer $iIdCaracteristica
     * @return object
     */
    public function Obtener_todos_segun_caracteristica($iIdCategoria,$iIdCaracteristica){
        return DB::select('CALL articulo_Obtener_todos_segun_caracteristica(?,?)',array($iIdCategoria,$iIdCaracteristica));
    }

    /**
     * Obtiene todos los articulos segun su categoria
     * @param  integer $iIdCategoria
     * @return object 
     */
    public function Obtener_todos_segun_categoria($iIdCategoria){
        return DB::select('CALL articulo_Obtener_todos_segun_categoria(?)',array($iIdCategoria));
    }
}