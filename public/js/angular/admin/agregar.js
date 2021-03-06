var app = angular.module('appAdmin');
app.controller('ProcesarAgregarArticuloController', function($http,$scope,$location,$stateParams){
    //***Ajax obtener todas las categorias***//
    $http.get('api-obtener-todas-las-categorias-backend').
    success(function(data, status, headers, config) {
        $scope.categorias = data.oResultado;
        //console.log($scope.categorias);
    }).error(function(data, status, headers, config) {
        // log error
    });  
});


app.controller('MostrarSeccionAgregarCategoriasArticuloController', function($http,$scope,$location,$stateParams){
    $scope.obtenerPreciosArticulo();
    $scope.cambiarIMostrarBuscador(1);
    $scope.cambiariAgregarArticulo(1);
    /**
     * Mostrar sseccion de categoria
     */
    $scope.EventoMostrarSelectorCategoria = function(seleccionado) {
        /*Ajax para obtener las caracteristicas segun una categoria, con elproposito de mostrar la seccion de categoias en agregar articulo*/
        $http.post('api-obtener-caracteristicas-segun-cat-mto-articulos-backend',{iIdCategoria : $scope.categoria.id}).
        success(function(data, status, headers, config) {
            $scope.categoriasSegundaSeccionAgregarArticulo = data.oResultado;
            //verificar si el objeto viene vacio
            var iVerificarObjeto = $scope.validarObjetoVacio($scope.categoriasSegundaSeccionAgregarArticulo);
            if(iVerificarObjeto === false){
                $scope.cambiarMostrarSeccionSecundariaAgregarArticulo(1);
            }
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }
});