var app = angular.module('appAdmin',["ngRoute"]);

// configure our routes
app.config(function($routeProvider) {
    $routeProvider

    // route for the home page
    /*            .when('/categoria/:id_categoria/caracteristica/:id_caracteristica', {
            templateUrl : 'templates/caracteristica.php',
            controller  : 'InicioController'
        })
            .when('/categoria/:id_categoria', {
            templateUrl : 'templates/categoria.php',
            controller  : 'InicioController'
        })*/
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
