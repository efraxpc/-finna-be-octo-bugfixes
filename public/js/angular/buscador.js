(function(){
    var app = angular.module('app');

    app.controller('BuscadorController', function($scope) {
        $scope.buscar = function() {
            //ajax obtener caracteristicas
            $http.get('api/buscar/articulos/segun/tags').
            success(function(data, status, headers, config) {
                $scope.caracteristicas = data.oResultado;
                //            console.log(data.oResultado);
            }).
            error(function(data, status, headers, config) {
                // log error
            });
            console.log($scope.sValorBusqueda);
        };    
    });
}).call(this);