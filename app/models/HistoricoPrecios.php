<?php 

/**
 * Modelo de tabla historico_precios
 */
class HistoricoPrecios extends Eloquent{
    protected $table = 'historico_precios';

    /**
     * Obtiene todos precios de un articulo dado
     * @return object
     */
    public function Obtener_segun_articulo($sIdArticulo)
    {
        return DB::select('CALL historico_precios_Obtener_segun_articulo(?)',array($sIdArticulo));
    }
}