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
     * @param  integer $iIdCaracteristica
     * @return object
     */
    public function Obtener_todos_segun_caracteristica($iIdCaracteristica){
        return DB::select('CALL articulo_Obtener_todos_segun_caracteristica(?)',array($iIdCaracteristica));
    }

    /**
     * Obtiene todos los articulos segun su categoria
     * @param  integer $iIdCategoria
     * @return object 
     */
    public function Obtener_todos_segun_categoria($iIdCategoria){
        return DB::select('CALL articulo_Obtener_todos_segun_categoria(?)',array($iIdCategoria));
    }

    /**
     * Obtiene todos los articulos en bruto
     * @return object
     */
    public function Obtener_todos_sin_paginacion(){
        return DB::select('CALL articulo_Obtener_todos()');
    }

    /**
     * Obtiene todos los articulos segun buscador en backend
     * @return object
     */
    public function Obtener_articulos_buscador_backend($sTextoBuscador){
        return DB::select('CALL articulo_Obtener_segun_buscador_backend(?)',array($sTextoBuscador));
    }

    /**
     * Obtiene datos de un articulo dado
     * @return object
     */
    public function Obtener_datos_articulo_backend($sIdArticulo){
        return DB::select('CALL articulo_Obtener_datos_articulo_backend(?)',array($sIdArticulo));
    }

    /**
     * Actualiza un articulo
     * @param  string $sTitulo 
     * @param  string $sDescripcion
     * @param  integer $iCategoria 
     * @param  integer $iHabilitado 
     * @param  integer $sIdArticulo       
     * @param  string $sPrecio   
     * @return object
     */
    public function Actualizar_backend($sTitulo,$sDescripcion,$iCategoria,$iHabilitado,$sIdArticulo,$sPrecio){
        return DB::select('CALL articulo_Actualizar_backend(?,?,?,?,?,?)',array($sTitulo,$sDescripcion,$iCategoria,$iHabilitado,$sIdArticulo,$sPrecio));
    }

    /**
     * Cambia una categoria a un articulo dado
     * @param  string $sIdArticulo 
     * @param  integer $iIdCategoria 
     * @return object
     */
    public function Setear_categoria($sIdArticulo,$iIdCategoria){
        return DB::select('CALL articulo_Setear_categoria(?,?)',array($sIdArticulo,$iIdCategoria));
    }

    /**
     * Setea un articulo
     * @param  string $sTitulo      
     * @param  string $sDescripcion 
     * @param  string $sPrecio      
     * @param  integer $iIdCategoria 
     * @param  integer $iHabilitado  
     * @return object con validaciones 
     */
    public function Setear_backend($sTitulo,$sDescripcion,$sPrecio,$iIdCategoria,$iHabilitado){
        return DB::select('CALL articulo_Setear_backend(?,?,?,?,?)',array($sTitulo,$sDescripcion,$sPrecio,$iIdCategoria,$iHabilitado));
    }
}