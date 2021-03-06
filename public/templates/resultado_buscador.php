<div class="col-sm-3">
    <div class="left-sidebar">
        <div class="shipping text-center"><!--shipping-->
            <img src="images/home/shipping.jpg" alt="" />
        </div><!--/shipping-->
    </div>
</div>

<div class="col-sm-9 padding-right" ng-controller="BuscadorController" infinite-scroll="articulos_segun_tag.nextPage()" infinite-scroll-distance="2" infinite-scroll-disabled="articulos_segun_tag.busy">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Articulos</h2>                      
        <div ng-repeat="articulo in articulos_segun_tag.items" on-finish-render="ngRepeatFinished">
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img ng-src="{{articulo.ruta}}{{articulo.archivo}}" id="imagen_{{$index}}"/>
                            <h2>{{articulo.precio}} Bs.F</h2>
                            <p>{{articulo.descripcion | limitTo: 65}}</p>
                        </div>
                        <div align="center">
                            <a ng-href="#articulo/{{articulo.id}}" class="btn btn-default add-to-cart">
                                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                                Ver
                            </a>
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