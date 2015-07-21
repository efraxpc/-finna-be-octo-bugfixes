<section ng-controller="AjaxBuscarProductosController">
   <h2>{{test}}</h2>
    <div class="container" ng-hide="mostrar_productos == false">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <div class="price-range"><!--price-range-->
                        <h2>Rango de precias</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->
                </div>
            </div>

            <div class="col-sm-9 padding-right" ng-controller="ContentsController" infinite-scroll="contents.nextPage()" infinite-scroll-distance="2" infinite-scroll-disabled="contents.busy">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Articulos</h2>                      
                    <div ng-repeat="articulo in oArticulos" on-finish-render="ngRepeatFinished">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img  alt="" src="images/home/product1.jpg" id="imagen_{{$index}}"/>

                                        <h2>{{articulo.precio}} S/.</h2>
                                        <p>{{articulo.descripcion}}</p>
                                        <!--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>-->
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{articulo.precio}} S/.</h2>
                                            <p>{{articulo.descripcion}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>                     
                </div>
            </div>
        </div>
    </div>
</section>