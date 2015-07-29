(function(){
    var app = angular.module('app');  

    app.controller('FiltroController',function($scope, $http){
        /**
         * Mostrar el filtro en portada
         */
        $scope.mostrar_filtro = function() {
            //ajax obtener caracteristicas de filtro
            $http.get('api/obtener/categorias/filtro').
            success(function(data, status, headers, config) {
                $scope.caracteristicas = data.oResultado;
                console.log(data.oResultado);
            }).
            error(function(data, status, headers, config) {
                // log error
            });
        }
    });
}).call(this);