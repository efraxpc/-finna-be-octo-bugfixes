var app = angular.module('appAdmin');
app.controller('ProcesarEditarController', function($http,$scope,$location,$stateParams){
    //***Ajax obtener obtener datos de articulo en backend***//
    $http.post('api-obtener-datos-articulos-backend',{sIdArticulo : $stateParams.id_articulo}).
    success(function(data, status, headers, config) {
        $scope.articulo = data.oResultado;
    }).
    error(function(data, status, headers, config) {
        // log error
    });

    //***Ajax obtener todas las categorias condicionado***//
    $http.post('api-obtener-categorias-condicionado-backend',{sIdArticulo : $stateParams.id_articulo}).
    success(function(data, status, headers, config) {
        $scope.categorias = data.oResultado;
    }).error(function(data, status, headers, config) {
        // log error
    });  
});
