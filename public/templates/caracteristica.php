<div class="col-sm-3" ng-controller="FiltroController" ng-init="mostrar_filtro();">
    <div class="left-sidebar">
        <h2>Filtrar Productos</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            Sportswear
                        </a>
                    </h4>
                </div>
                <div id="sportswear" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li><a href="#">Nike </a></li>
                            <li><a href="#">Under Armour </a></li>
                            <li><a href="#">Adidas </a></li>
                            <li><a href="#">Puma</a></li>
                            <li><a href="#">ASICS </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/category-products-->
    </div>
</div>

<div class="col-sm-9 padding-right" ng-controller="AjaxBuscarProductosSegunCaracteristicaController" infinite-scroll="articulos_segun_caracteristica.nextPage()" infinite-scroll-distance="2" infinite-scroll-disabled="articulos_segun_caracteristica.busy">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Articulos</h2>                      
        <div ng-repeat="articulo in articulos_segun_caracteristica.items" on-finish-render="ngRepeatFinished">
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img ng-src="{{articulo.archivo}}" id="imagen_{{$index}}"/>
                            <h2>{{articulo.precio}} S/.</h2>
                            <p>{{articulo.descripcion | limitTo: 73}}</p>
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
