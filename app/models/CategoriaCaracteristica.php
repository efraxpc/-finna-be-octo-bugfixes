<?php 

/**
 * Modelo de tabla categoria
 */
class CategoriaCaracteristica extends Eloquent{
    protected $table = 'categoria_caracteristica';


    /**
     * Obtener todos los registros segun un articulo, substrae una categoria y busca las caracteristicas, segun esa categoria
     * @param  string $sIdArticulo
     * @return object
     */
    public function Obtener_segun_categoria($sIdArticulo)
    {
        return DB::select('CALL categoria_caract_Obtener_todos_segun_art_cat(?)',array($sIdArticulo));
    }

    /**
     * Obtiene categorias segun 1 caracteristica, se usa en el buscador de agregar/editar articulos
     * @param  string $sCategoria                    
     * @param  string $sTextoBuscadorCaracteristicas 
     * @return object
     */
    public function Obtener_segun_categoria_y_caracteristica($sCategoria, $sTextoBuscadorCaracteristicas)
    {
        return DB::select('CALL categoria_caract_Obtener_segun_categoria(?,?)',array($sCategoria, $sTextoBuscadorCaracteristicas));
    }

    /**
     * Setea los valores de caracteriscias nuevos, en caso de ya existir dichos valores no hace nada
     * @param  string $sValorCaracteristica 
     * @param  string $sIdCategoria      
     * @param  string $sIdCaracteristica
     * @param  string $sIdArticulo
     * @return object
     */
    public function Setear_segun_categoria($sValorCaracteristica,$sIdCategoria,$sIdCaracteristica,$sIdArticulo){
        return DB::select('CALL categoria_caract_Setear_segun_categoria(?,?,?,?)',array($sValorCaracteristica, $sIdCategoria,$sIdCaracteristica,$sIdArticulo));

    }

    /**
     * Obtiene las caracteristicas segun un articulo
     * @param  string $sIdArticulo
     * @return object
     */
    public function Obtener_valores_segun_articulo($sIdArticulo){
        return DB::select('CALL categoria_caract_Obtener_todos_segun_art(?)',array($sIdArticulo));
    }

    /**
     * Obtiene las caracteristicas segun una categoria dada
     * @param  integer $iIdCategoria
     * @return object
     */
    public function Obtener_valores_segun_categoria($iIdCategoria){
        return DB::select('CALL categoria_caract_Obtener_todos_segun_cat(?)',array($iIdCategoria));
    }
}
