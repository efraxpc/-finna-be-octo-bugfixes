<?php

/**
 * Modelo de tabla categoria
 */
class Categoria extends Eloquent{
    protected $table = 'categoria';

    /**
     * Obtener absolutamente todos los registros
     * @return object
     */
    public function Obtener_todos(){
        return DB::select('CALL categoria_Obtener_todos()');
    }
    /**
     * Obtiene todos los registros para ser usados en el frontend, pagina principal
     * @return object
     */
    public function Obtener_todos_frontend()
    {
        return DB::select('CALL categoria_Obtener_todos_frontend()');
    }

    /**
     * Obtiene todos las categorias menos la categoria correspondiente al articulo dado
     * @return object
     */
    public function Obtener_todos_condicionado($sIdArticulo)
    {
        return DB::select('CALL categoria_Obtener_todas_condicionado_backend(?)',array($sIdArticulo));
    }

    /**
     * Obtiene todas las caterogias
     * @return object
     */

    public function Modificar_backend($sTitulo,$sDescripcion,$iHabilitado,$sIdCategoria){
        return DB::select('CALL categoria_Modificar_backend(?,?,?,?)',array($sTitulo,$sDescripcion,$iHabilitado,$sIdCategoria));
    }

    /**
     * Obtiene datos de una categoria individual
     * @return object
     */

    public function Obtener_datos($sIdCategoria){
        return DB::select('CALL categoria_Obtener_datos(?)',array($sIdCategoria));
    }

}
