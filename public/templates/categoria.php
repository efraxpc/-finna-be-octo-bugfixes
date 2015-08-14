<div class="col-sm-3" ng-controller="FiltroController" ng-init="mostrar_filtro();">
    <div class="left-sidebar">
        <h2>Filtrar Productos</h2>
        <div class="panel-group category-products" id="accordian">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <p>{{categoria}}</p>
                    </h4>
                    <div class="panel-body">
                        <ul>
                            <li ng-repeat="caracteristica in caracteristicas"> 
                                {{caracteristica.nombre_caracteristica}}
                                <ul>
                                    <!-- Diferenciacion de valores de categorias en filtro-->
                                    <li ng-repeat="caracteristica_valor in caracteristicas_valores">

                                        <div class="checkbox" ng-show="caracteristica_valor.id_caracteristica == caracteristica.id">
                                            <input type="checkbox" ng-model="selection.ids[caracteristica.id]" id="{{caracteristica.id}}" ng-model="seleccion" ng-click="eventoAccionarFiltro();" class="recoger_datos_input_filtro"> {{caracteristica_valor.valor}}
                                        </div>
                                    </label>

                                <!--                         <p ng-show="caracteristica_valor.id_caracteristica == caracteristica.id">
<input type="checkbox">{{caracteristica_valor.valor}}
</p>-->
                            </li>
                            </li>
                        </ul>
<!--                    <div ng-controller="Ctrl">
                        <span ng-repeat="category in categories">
                            <label class="checkbox" for="{{category.id}}">
                                <input type="checkbox" ng-model="selection.ids[category.id]" name="group" id="{{category.id}}" />
                                {{category.name}}
                            </label>
                        </span>
                        <pre ng-bind="selection.ids | json"></pre>    
                    </div>-->
                </div>
            </div>
        </div>
    </div>
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
                            <img ng-src="{{articulo.archivo}}" id="imagen_{{$index}}"/>
                            <h2>{{articulo.precio}} S/.</h2>
                            <p>{{articulo.descripcion | limitTo: 65}}</p>
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