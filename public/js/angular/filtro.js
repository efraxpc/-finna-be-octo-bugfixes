(function(){
    var app = angular.module('app');  

    app.controller('FiltroController',function($scope, $http, $routeParams, $route){
        $scope.oSeleccionChecksFiltro = {}

        $scope.cambiarMaster  = function(newVal){
            $scope.master = newVal;
        }

        /**
         * Mostrar el filtro en portada
         */
        $scope.mostrar_filtro = function() {
            //ajax obtener caracteristicas de filtro
            $http.post('api-obtener-caracteristicas-filtro',{id_categoria : $routeParams.id_categoria}).
            success(function(data, status, headers, config) {
                $scope.caracteristicas = data.oResultado;
                //console.log(data.oResultado);
            }).
            error(function(data, status, headers, config) {
                // log error
            });

            $http.post('api-obtener-caracteristicas-valores-filtro',{id_categoria : $routeParams.id_categoria}).
            success(function(data, status, headers, config) {
                $scope.caracteristicas_valores = data.oResultado;
                console.log($scope.caracteristicas_valores);
            }).
            error(function(data, status, headers, config) {
                // log error
            });
        }

        $scope.clickCheckFitro = function() {
            console.log($scope.oSeleccionChecksFiltro.ids);

            $http.post('api-obtener-articulos-paginados-segun-filtro',{oSeleccionChecksFiltro : $scope.oSeleccionChecksFiltro.ids}).
            success(function(data, status, headers, config) {
                $scope.test = data.oResultado;
                console.log($scope.master);
                $scope.cambiarMaster(1);
                //$route.reload();

            }).
            error(function(data, status, headers, config) {
                // log error
            });
        }
    });
}).call(this);