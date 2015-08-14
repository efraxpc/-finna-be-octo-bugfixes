var app = angular.module('appAdmin');

app.controller('BuscarController', function($http,$scope,$location,$stateParams){
    var sTextoBuscador = $stateParams.textoBuscador;

    //***Ajax obtener todas los articulos como resultado de la busqueda***//
    $http.post('api-obtener-articulos-buscador-backend',{sTextoBuscador:sTextoBuscador}).
    success(function(data, status, headers, config) {
        $scope.articulos = data.oResultado;
    }).
    error(function(data, status, headers, config) {
        // log error
    });
});

app.controller('BarraBuscadorController', function($scope,$location,$state){
    /**
     * Reenvia a BuscarController
     */
    $scope.rutaBuscar = function() {
        $location.path('/buscar/'+ $scope.sValorBusqueda);
        // caso la caja de buscador este vacia redireccionar al listado principal
        if(!$scope.sValorBusqueda.length){
            $state.go('articulos');
        }
    }; 
});

app.controller('BuscadorArticulosController', function ($scope, $sce, $q, $http) {
    //var sCategoria = document.getElementById('categoria').value;
    //var iCategoria = $scope.categoria;
    console.log($scope.categoria);
    $scope.dirty = {};
    var states = [];

    function suggest_state(term) {
        if($scope.iAgregarArticulo === 1){
            //***Ajax obtener todas las caracteristicas de una categoria segun un tag  CASO AGREGAR**/
            $http.post('api-obtener-caracteristicas-segun-tag',{sTextoBuscadorCaracteristicas: term, sCategoria : $scope.categoria.id}).
            success(function(data, status, headers, config) {
                var resultado = data.oResultado;
                for(var i = 0; i < resultado.length; i++){
                    foo.push(resultado[i].valor_caracteristica);
                }
                console.log(foo);
                states = foo;
                console.log(states);
            }).
            error(function(data, status, headers, config) {
                // log error
            });            
        }else{
            //***Ajax obtener todas las caracteristicas de una categoria segun un tag CASO EDITAR**/
            $http.post('api-obtener-caracteristicas-segun-tag',{sTextoBuscadorCaracteristicas: term, sCategoria : $scope.articulo.id_categoria}).
            success(function(data, status, headers, config) {
                var resultado = data.oResultado;
                for(var i = 0; i < resultado.length; i++){
                    foo.push(resultado[i].valor_caracteristica);
                }
                console.log(foo);
                states = foo;
                console.log(states);
            }).
            error(function(data, status, headers, config) {
                // log error
            });
        }        


        var foo = [];
        var q = term.toLowerCase().trim();
        var results = [];

        // Find first 10 states that start with `term`.
        for (var i = 0; i < states.length && results.length < 10; i++) {
            var state = states[i];
            if (state.toLowerCase().indexOf(q) === 0)
                results.push({ 
                    label: state, value: state });
        }
        return results;
    }
    $scope.autocomplete_options = {
        suggest: suggest_state
    };
});