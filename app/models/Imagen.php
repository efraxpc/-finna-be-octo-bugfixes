<?php 

/**
 * Modelo de tabla Imagen
 */
class Imagen extends Eloquent{
    protected $table = 'imagen';

    /**
     * Setea imagenes organizadas por cada articulo
     * @param  string $sNombreImagen con el nombre y extesion de la imagen
     * @param  string $sIdArticulo  correspondiente a la imagen
     * @return object con el status
     */
    public function Setear_segun_articulo($sNombreImagen,$sIdArticulo){
        return DB::select('CALL Imagen_Setear_segun_articulo(?,?)',array($sNombreImagen,$sIdArticulo));
    }

    /**
     * Obtiene imagenes segun un articulo
     * @param  string $sIdArticulo
     * @return object
     */
    public function Obtener_segun_articulo($sIdArticulo){
        return DB::select('CALL Imagen_Obtener_segun_articulo(?)',array($sIdArticulo));
    }

    /**
     * Setea imagen como principal para un articulo
     * @param  string $sIdImagen
     * @param  string $sIdArticulo
     * @return object
     */
    public function Setear_principal_segun_articulo($sIdImagen,$sIdArticulo){
        return DB::select('CALL Imagen_Setear_principal(?,?)',array($sIdImagen,$sIdArticulo));
    }
}