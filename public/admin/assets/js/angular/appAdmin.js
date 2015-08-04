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

app.controller('CrudController', function($scope,$http) {
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
        console.log('estoy mostrando un buscador');
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
    $scope.buscar = function(){
        console.log('buscando...');
    }
});
