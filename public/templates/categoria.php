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

<div class="col-sm-9 padding-right" ng-controller="AjaxBuscarProductosSegunCategoriaController" infinite-scroll="articulos_segun_categorias.nextPage()" infinite-scroll-distance="2" infinite-scroll-disabled="articulos_segun_categorias.busy">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Articulos</h2>                      
        <div ng-repeat="articulo in articulos_segun_categorias.items" on-finish-render="ngRepeatFinished">
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img  alt="" src="images/home/product1.jpg" id="imagen_{{$index}}"/>
                            <h2>{{articulo.precio}} S/.</h2>
                            <p>{{articulo.descripcion}}</p>
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