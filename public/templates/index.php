<div ng-hide="buscador== true" class="col-sm-9 padding-right" ng-controller="ContentsController" infinite-scroll="contents.nextPage()" infinite-scroll-distance="2" infinite-scroll-disabled="contents.busy">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Articulos</h2>                      
        <div ng-repeat="content in contents.items" on-finish-render="ngRepeatFinished">
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img  alt="" src="images/home/product1.jpg" id="imagen_{{$index}}"/>
                            <h2>{{content.precio}} S/.</h2>
                            <p>{{content.descripcion}}</p>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{content.precio}} S/.</h2>
                                <p>{{content.descripcion}}</p>
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