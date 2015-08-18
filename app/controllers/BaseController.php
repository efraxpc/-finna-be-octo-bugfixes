<?php

class BaseController extends Controller {

    /**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

    /**
     * Borrar tablas y procedures del server
     */
    public function borrar_tablas(){

        DB::select(DB::raw('truncate table articulo_caracteristica_valor'));
        DB::select(DB::raw('truncate table categoria_caracteristica'));
        DB::select(DB::raw('truncate table articulo_forma_pago'));
        DB::select(DB::raw('truncate table articulo_resaltado'));
        DB::select(DB::raw('truncate table imagen'));
        DB::select(DB::raw('truncate table articulo_tag'));
        DB::select(DB::raw('ALTER TABLE articulo_caracteristica_valor DROP FOREIGN KEY `FK_articulo_caracteristica_valor_categoria_caracteristica_valor`'));
        DB::select(DB::raw('ALTER TABLE articulo_caracteristica_valor DROP FOREIGN KEY `FK_articulo_caracteristica_valor_categoria_caracteristica`'));
        DB::select(DB::raw('truncate table caracteristica_valor'));
        DB::select(DB::raw('ALTER TABLE categoria_caracteristica DROP FOREIGN KEY `FK_categoria_caracteristica_caracteristica`'));        
        DB::select(DB::raw('ALTER TABLE caracteristica_valor DROP FOREIGN KEY `fk_caracteristica_valor_caracteristica`'));        
        DB::select(DB::raw('truncate table caracteristica'));
        DB::select(DB::raw('ALTER TABLE categoria_caracteristica DROP FOREIGN KEY `FK_categoria_caracteristica_categoria`'));   
        DB::select(DB::raw('ALTER TABLE articulo DROP FOREIGN KEY `fk_Articulo_Categoria`'));        
        DB::select(DB::raw('truncate table categoria'));
        DB::select(DB::raw('ALTER TABLE articulo_caracteristica_valor DROP FOREIGN KEY `FK_articulo_caracteristica_valor_categoria_articulo`'));      
        DB::select(DB::raw('ALTER TABLE historico_precios DROP FOREIGN KEY `fk_Historico_precios_Articulo1`'));        
        DB::select(DB::raw('ALTER TABLE articulo_resaltado DROP FOREIGN KEY `fk_articulo-item_articulo1`'));        
        DB::select(DB::raw('ALTER TABLE articulo_tag DROP FOREIGN KEY `fk_articulo-tag_articulo1`'));        
        DB::select(DB::raw('ALTER TABLE articulo_forma_pago DROP FOREIGN KEY `fk_articulo_forma_pago_articulo1`'));        
        DB::select(DB::raw('ALTER TABLE imagen DROP FOREIGN KEY `fk_imagen_articulo1`'));        
        DB::select(DB::raw('truncate table articulo'));    
        DB::select(DB::raw('drop table articulo_caracteristica_valor'));
        DB::select(DB::raw('drop table categoria_caracteristica'));
        DB::select(DB::raw('drop table articulo_forma_pago'));
        DB::select(DB::raw('drop table articulo_resaltado'));
        DB::select(DB::raw('drop table imagen'));
        DB::select(DB::raw('drop table articulo_tag'));
        DB::select(DB::raw('drop table caracteristica_valor'));
        DB::select(DB::raw('drop table caracteristica'));
        DB::select(DB::raw('drop table categoria'));
        DB::select(DB::raw('drop table articulo'));
        DB::select(DB::raw('drop table resaltado'));
        DB::select(DB::raw('drop table forma_pago'));
        DB::select(DB::raw('drop table mensaje'));
        DB::select(DB::raw('drop table moneda'));
        DB::select(DB::raw('drop table tags'));
        DB::select(DB::raw('drop table historico_precios'));


        //DB::select(DB::raw('DROP PROCEDURE IF EXISTS `articulo_Actualizar_backend`'));

    }

}
