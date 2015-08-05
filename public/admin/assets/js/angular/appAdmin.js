/*
var app = angular.module('appAdmin',["ngRoute"]);

// configure our routes
app.config(function($routeProvider) {
    $routeProvider

        .when('/articulos', {
        templateUrl : 'templates/admin/articulos.php',
        controller  : 'CrudController'
    })
        .when('/', {
        templateUrl : 'templates/admin/index.php',
        controller  : 'CrudController'
    })
        .otherwise({
        redirectTo: '/'
    }); 
});
*/
var app = angular.module('appAdmin',["ui.router"]);

app.config(function($stateProvider, $urlRouterProvider) {
    //
    // For any unmatched url, redirect to /state1
    $urlRouterProvider.otherwise("/");
    //
    // Now set up the states
    $stateProvider
        .state('index', {
        url: "/",
        templateUrl: "templates/admin/index.php"
    })
/*        .state('state1.list', {
        url: "/list",
        templateUrl: "partials/state1.list.html",
        controller: function($scope) {
            $scope.items = ["A", "List", "Of", "Items"];
        }
    })*/
        .state('articulos', {
        url: "/articulos",
        templateUrl: "templates/admin/articulos.php"
    })
        .state('buscar', {
        url: "/buscar/:textoBuscador",
        templateUrl: "templates/admin/resultado_buscador.php",
        controller: "BuscarController"
    });
});

app.controller('CrudController', function($scope,$http,$state,$stateParams,$location) {
    /**
     * Ocultar el buscador de articulos
     */
    $scope.ocultarBuscador = function(){
        $scope.bMostrarBuscador = false;
    }

    /**
     * Mostrar el buscador de articulos
     */
    $scope.mostrarBuscador = function(){
        //$scope.bMostrarBuscador = true;
        $scope.bMostrarBuscador = true;
        //console.log('estoy mostrando un buscador');
    }

    /**
     * Ajax para obtener todos los articulos ordenados por antiguedad
     */
    $scope.obtenerArticulosSinPaginar = function() {
        $http.get('api/obtener/articulos/sin/paginacion').
        success(function(data, status, headers, config) {
            $scope.articulos = data.oResultado;
            //console.log($scope.articulos);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }
});

app.controller('BuscarController', function($http,$scope,$location,$stateParams){
    var sTextoBuscador = $stateParams.textoBuscador;
    //console.log(textoBuscador);

    $http.post('api/obtener/articulos/buscador/backend',{sTextoBuscador:sTextoBuscador}).
    success(function(data, status, headers, config) {
        $scope.articulos = data.oResultado;
        //console.log($scope.articulos);
    }).
    error(function(data, status, headers, config) {
        // log error
    });
    console.log('buscando...');
});

app.controller('BarraBuscadorController', function($scope,$location){
    /**
     * Reenvia a BuscarController
     */
    $scope.rutaBuscar = function() {
        $location.path('/buscar/'+ $scope.sValorBusqueda);
    }; 
});
