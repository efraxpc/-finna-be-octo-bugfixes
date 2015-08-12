var app = angular.module('appAdmin');
app.controller('ProcesarAgregarArticuloController', function($http,$scope,$location,$stateParams){
    //ocultar mensaje de exito
    $scope.cambiariExito(0);
    //***Ajax obtener todas las categorias***//
    $http.get('api/obtener/categorias/menu/home').
    success(function(data, status, headers, config) {
        $scope.categorias = data.oResultado;
        //console.log($scope.categorias);
    }).error(function(data, status, headers, config) {
        // log error
    });  
});


app.controller('MostrarSeccionAgregarCategoriasArticuloController', function($http,$scope,$location,$stateParams){
    /**
     * Mostrar sseccion de categoria
     */
    $scope.EventoMostrarSelectorCategoria = function(seleccionado) {
        /*Ajax para obtener las caracteristicas segun una categoria, con elproposito de mostrar la seccion de categoias en agregar articulo*/
        $http.post('api-obtener-caracteristicas-segun-cat-mto-articulos-backend').{iIdCategoria : $scope.categoria.id}.
        success(function(data, status, headers, config) {
            $scope.categorias = data.oResultado;
            console.log($scope.categorias);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }
});