(function(){
    var app = angular.module('app',["infinite-scroll","ngRoute"]);

    // configure our routes
    app.config(function($routeProvider) {
        $routeProvider

        // route for the home page
            .when('/categoria/:id_categoria/caracteristica/:id_caracteristica', {
            templateUrl : 'templates/caracteristica.php',
            controller  : 'InicioController'
        })
            .when('/categoria/:id_categoria', {
            templateUrl : 'templates/categoria.php',
            controller  : 'InicioController'
        })

            .when('/buscar/:textoBuscador', {
            templateUrl : 'templates/resultado_buscador.php',
            controller  : 'BuscadorController',
        })

            .when('/articulo/:id_articulo', {
            templateUrl : 'templates/detalles_articulo.php',
            //controller  : 'InicioController',
        })
            .when('/', {
            templateUrl : 'templates/index.php',
            controller  : 'PortadaController'
        })
            .otherwise({
            redirectTo: '/'
        }); 
    });

    app.controller('InicioController', function($scope,$http) {
        $scope.esconder_inicio = function() {
            $scope.mostrar_productos = false;
        };
        $scope.mostrar_inicio = function() {
            $scope.mostrar_productos = true;
        };
        $scope.cambiarMostrar_productos = function(newVal) {
            $scope.mostrar_productos = newVal;
        };
    });    

}).call(this);