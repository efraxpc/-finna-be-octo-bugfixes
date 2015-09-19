(function(){
    var app = angular.module('app');

    app.controller('ArticuloController', function($scope,$http,$route,$routeParams) {
        
        $scope.mostrar_inicio;
        
        //ajax obtener articulo
        $http.post('api-obtener-datos-articulo',{id_articulo:$routeParams.id_articulo}).
        success(function(data, status, headers, config) {
            $scope.articulo = data.oResultado[0];
            //console.log($scope.articulo);
        }).
        error(function(data, status, headers, config) {
            // log error
        });      
        
        //ajax obtener imagenes de articulo
        $http.post('api-recuperar-imagenes-articulo-backend',{id_articulo:$routeParams.id_articulo}).
        success(function(data, status, headers, config) {
            $scope.imagenes = data.oResultado;
            console.log($scope.imagenes);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }); 

}).call(this);