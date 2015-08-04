(function(){
    var app = angular.module('app');  

    app.controller('FiltroController',function($scope, $http, $routeParams){
        /**
         * Mostrar el filtro en portada
         */
        $scope.mostrar_filtro = function() {
            //ajax obtener caracteristicas de filtro
            $http.post('api/obtener/caracteristicas/filtro',{id_categoria : $routeParams.id_categoria}).
            success(function(data, status, headers, config) {
                $scope.caracteristicas = data.oResultado;
                //console.log(data.oResultado);
            }).
            error(function(data, status, headers, config) {
                // log error
            });

            $http.post('api/obtener/caracteristicas/valores/filtro',{id_categoria : $routeParams.id_categoria}).
            success(function(data, status, headers, config) {
                $scope.caracteristicas_valores = data.oResultado;
                //console.log($scope.caracteristicas_valores);
            }).
            error(function(data, status, headers, config) {
                // log error
            });
        }
    });
}).call(this);