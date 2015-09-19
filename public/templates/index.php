<div class="col-sm-3">
    <div class="left-sidebar">
        <div class="shipping text-center"><!--shipping-->
            <img src="images/home/shipping.jpg" alt="" />
        </div><!--/shipping-->
    </div>
</div>

<div ng-hide="buscador == true" class="col-sm-9 padding-right" ng-controller="PortadaController" ng-init="paginar();" infinite-scroll="contents.nextPage()" infinite-scroll-distance="2" infinite-scroll-disabled="contents.busy">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Articulos</h2>                      
        <div ng-repeat="content in contents.items" on-finish-render="ngRepeatFinished">
            <div class="col-sm-4">
                <div class="product-image-wrapper" >
                    <div class="single-products" >
                        <div class="productinfo text-center">
                            <img height="240px" ng-src="{{content.ruta}}{{content.archivo}}" id="imagen_{{$index}}"/>
                            <h2 ng-hide="content.precio==0">{{content.precio}} S/.</h2>
                            <p>{{content.descripcion  | limitTo: 60}}</p>
                        </div>
                        <div align="center">
                            <a ng-href="#articulo/{{content.id}}" class="btn btn-default add-to-cart">
                                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                                Ver
                            </a>
                        </div>
                        <!--                        <div class="product-overlay">
<div class="overlay-content">
<h2>{{content.precio}} S/.</h2>
<p>{{content.descripcion | limitTo: 37}}</p>
</div>
</div>-->
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