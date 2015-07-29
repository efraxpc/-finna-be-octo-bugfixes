(function(){
    var app = angular.module('app');

    app.controller('MenuCategoriasController', function($scope,$http) {
        //ajax obtener categorias
        $http.get('api/obtener/categorias/menu/home').
        success(function(data, status, headers, config) {
            $scope.categorias = data.oResultado;
            //console.log($scope.categorias);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
        //ajax obtener caracteristicas
        $http.get('api/obtener/caracteristicas/menu/home').
        success(function(data, status, headers, config) {
            $scope.caracteristicas = data.oResultado;
            //            console.log(data.oResultado);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }); 

    app.controller('ClickMenuController', function($scope, $routeParams) {
        $scope.primerMetodo = function() {
            $scope.cambiarMostrar_productos(false);
            //console.log($scope.mostrar_productos);
        };
    });
}).call(this);