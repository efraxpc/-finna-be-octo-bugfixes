<!DOCTYPE html>
<html lang="en" data-ng-app = 'app' ng-controller="InicioController" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>.::Proyecto Catalogo::.</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->
    <body ng-controller="ClickMenuController" ng-init="esconder_inicio()">	
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left" ng-controller="MenuCategoriasController">
                            <ul class="nav navbar-nav collapse navbar-collapse" >
                                <li><a href="#inicio" class="active" ng-hide="mostrar_productos == false" ng-click="esconder_inicio()">Inicio</a></li>
                                <li class="dropdown" ng-repeat="categoria in categorias"><a ng-click="mostrar_inicio()" ng-href="#categoria/{{categoria.id}}">{{categoria.nombre}}<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li ng-repeat="caracteristica in caracteristicas" ng-click="mostrar_inicio()" ng-if="categoria.nombre == caracteristica.nombre_categoria">
                                            <a ng-href="#categoria/{{categoria.id}}/caracteristica/{{caracteristica.id_valor}}" ng-click="primerMetodo()">{{caracteristica.valor}}</a>
                                        </li>
                                    </ul>
                                </li>                                
                                <!--                                <li><a href="contact-us.html"></a></li>-->
                            </ul>
                        </div>
                        <!-- MAIN CONTENT AND INJECTED VIEWS -->
                        <!-- angular templating -->
                        <!-- this is where content will be injected -->
                    </div>
                    <div class="col-sm-3"  ng-controller="BarraBuscadorController">
                        <div class="search_box pull-right">
                            <input type="text" ng-model="sValorBusqueda" ng-change="buscar();" placeholder="Buscar"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
        <!--        seccion para colocar espacio responsive, segun plantilla-->
        <section id="slider"><!--slider-->
            <div class="container"></div>
        </section><!--/slider-->               
        <section id="advertisement">
            <div class="container">
                <img src="images/shop/advertisement.jpg" alt="" />
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div ng-view></div>
                </div>
            </div>
            </div>
        </section>
    <script src="js/jquery.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="https:ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <script src="js/infinite-scroll.min.js"></script>
    <script src="js/angular/app.js"></script>  
    <script src="js/angular/paginacion.js"></script>  
    <script src="js/angular/menu.js"></script>  
    <script src="js/angular/buscador.js"></script>  
    <script src="js/angular/filtro.js"></script>  
    </body>
</html>