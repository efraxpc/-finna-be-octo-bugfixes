<?php 

/**
 * Modelo de tabla ArticuloCaracteristicaValorCategoria
 */
class ArticuloCaracteristicaValorCategoria extends Eloquent{
    protected $table = 'articulo_caracteristica_valor_categoria';

    /**
     * Obtiene todos los registros segun su categoria
     * @return object
     */
    public function Obtener_todos_segun_categoria($iIdCategoria)
    {
        return DB::select('CALL articulo_car_valor_cat_Obtener_todos_segun_categoria(?)',array($iIdCategoria));
    }

    /**
     * Devuelve todas los valores de las caracteristicas con su id de la tabla articulo_caracteristica_valor_categoria, segun categoria
     * @param  integer $iIdCategoria
     * @return object
     */
    
    public function Obtener_todos_valores_segun_categoria($iIdCategoria){
        return DB::select('CALL articulo_car_valor_cat_Obtener_valores_carc_seg_cat(?)',array($iIdCategoria));

    }

    /**
     * Devuelve todas las caracteristicas con el fin de ser usadas en el menu
     * @return object
     */
    /*
    public function Obtener_todos_segun_menu()
    {
        return DB::select('CALL articulo_car_valor_cat_Obtener_todos_segun_menu()');
    }
    */
    /**
     * Obtiene todos los articulos segun tag o caracteristica
     * @param string $sEntrada con el fragmento del tag o caracteristica
     * @return object 
     */
    public function Obtener_todos_segun_tag($sEntrada){
        return DB::select('CALL articulo_car_valor_cat_Obtener_todos_segun_tag(?)',array($sEntrada));
    }
}