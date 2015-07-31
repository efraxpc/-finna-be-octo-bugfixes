<?php 

/**
 * Modelo de tabla ArticuloCaracteristicaValorCategoria
 */
class ArticuloCaracteristicaValorCategoriaTag extends Eloquent{
    protected $table = 'articulo_caracteristica_valor_categoria_tag';


    /**
     * Obtiene todos los articulos segun tag
     * @param string $sEntrada con el fragmento del tag
     * @return object 
     */
    public function Obtener_todos_segun_tag($sEntrada){
        return DB::select('CALL articulo_car_valor_cat_Obtener_todos_segun_tag(?)',array($sEntrada));
    }
}