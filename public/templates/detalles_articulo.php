<div class="col-sm-3">
    <div class="left-sidebar">
        <div class="shipping text-center"><!--shipping-->
            <img src="images/home/shipping.jpg" alt="" />
        </div><!--/shipping-->
    </div>
</div>

<div class="col-sm-9 padding-right" ng-controller="ArticuloController">
    <h2 class="title text-center">{{articulo.titulo}}</h2>                      
    <div class="row">
        <div class="col-md-3 col-md-offset-5">
        
            Descripcion:
            {{articulo.descripcion}}

            <br>
            <br>
        </div>
        <div class="col-md-6 col-md-offset-5" ng-repeat="imagen in imagenes">
            <img ng-src="{{imagen.ruta}}{{imagen.archivo}}" alt="..." class="img-rounded">
        </div>
    </div>