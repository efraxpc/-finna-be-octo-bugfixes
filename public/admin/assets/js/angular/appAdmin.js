var app = angular.module('appAdmin',["ui.router","ngSanitize","MassAutoComplete","growlNotifications"]);

app.config(function($stateProvider, $urlRouterProvider) {
    //
    // For any unmatched url, redirect to /state1
    $urlRouterProvider.otherwise("/");
    //
    // Now set up the states
    $stateProvider
        .state('index', {
        url: "/",
        templateUrl: "templates/admin/index.php"
    })
        .state('articulos', {
        url: "/articulos",
        templateUrl: "templates/admin/articulos.php"
    })
        .state('articulos-editar', {
        url: "/editar-articulo/:id_articulo",
        templateUrl: "templates/admin/articulos_editar.php",
        controller: "ProcesarEditarController"
    })
        .state('buscar', {
        url: "/buscar/:textoBuscador",
        templateUrl: "templates/admin/resultado_buscador.php",
        controller: "BuscarController"
    });
});

app.controller('CrudController', function($scope,$http,$state,$stateParams,$location) {
    /**
     * Ocultar el buscador de articulos
     */
    $scope.ocultarBuscador = function(){
        $scope.bMostrarBuscador = false;
    }

    /**
     * Mostrar el buscador de articulos
     */
    $scope.mostrarBuscador = function(){
        $scope.bMostrarBuscador = true;
    }

    /**
     * Ajax para obtener todos los articulos ordenados por antiguedad
     */
    $scope.obtenerArticulosSinPaginar = function() {
        $http.get('api-obtener-articulos-sin-paginacion').
        success(function(data, status, headers, config) {
            $scope.articulos = data.oResultado;
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }

    $scope.editar = function(id_articulo){
        $location.path('/editar-articulo/'+id_articulo);
    }

    /**
     * Ajax para obtener todos precios del articulo
     */
    $scope.obtenerPreciosArticulo = function() {
        $http.post('api-obtener-historico-precios-segun-articulo',{sIdArticulo : $stateParams.id_articulo}).
        success(function(data, status, headers, config) {
            $scope.precios_articulos = data.oResultado;
            //console.log($scope.precios_articulos);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }
    $scope.editar = function(id_articulo){
        $location.path('/editar-articulo/'+id_articulo);
    }

    /**
     * Agregar una caracteristica de un articulo
     */
    $scope.agregarValorCaracteristica = function(){
        $scope.tipo = false;
        $scope.tipo = null;
        var sCaracteristica = document.getElementById('sValorCaracteristica').value;
        $scope.sIdCategoria = document.getElementById('sValorCaracteristica').getAttribute("valor-categoria");
        var oInputCheck = document.getElementsByClassName("input-check");

        $.each(oInputCheck, function( iIndice, oValor ) {
            //Obtener cual caracteristica esta en CKECK
            if(oValor.checked == true){
                $scope.sIdCaracteristica = oValor.getAttribute("id_caracteristica");
            }
        });
        //***Ajax setear caracteristica en administracion de articulos***//
        $http.post('api-setear-caracterisricas-articulos-backend',{sValorCaracteristica: sCaracteristica, sIdCategoria : $scope.sIdCategoria, sIdCaracteristica : $scope.sIdCaracteristica, sIdArticulo:  $stateParams.id_articulo}).
        success(function(data, status, headers, config) {
            var iResultado = data.oResultado[0].tupla;
            $scope.tipo = data.oResultado[0].tipo;
            $scope.mensaje = data.oResultado[0].mensajes;
            //caso haya seteado en la bd
            if (iResultado === 1){
                //recargar pagina
                $state.go($state.current, {}, {reload: true});                
            }else{
                $scope.error = true;
            }
        }).
        error(function(data, status, headers, config) {
            // log error
        });
        $scope.sIdCaracteristica = "";
    }

    /**
     * Obtiene las caracteristicias asociadas a un articulo y son llenadas en la tabla de caracteristicas en el mantenimiento de articulos
     */
    $scope.cargarCaracterislicasDeArticulo = function(){
        $http.post('api-obtener-valores-caracteristicas-articulo-backend',{sIdArticulo:$stateParams.id_articulo}).
        success(function(data, status, headers, config) {
            $scope.caracteristicas_tabla = data.oResultado;
            //console.log($scope.caracteristicas_tabla);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }
});
/**
     * Obtiene todas las caracteristicas de una categoria, aplicada al mentenimeinto de articulos
     */
// correjir, se necesita obtener absolutamente todas las caracteristicas para mostrarlas en los checks y cambiar nombre
app.controller('ObtenerChecksCaracteristicasController', function($scope,$http,$stateParams) {
    var sIdArticulo = $stateParams.id_articulo;
    //Ajax obtener valores de las caracteristicas a ser seleccionadas (cheks)
    $http.post('api-obtener-valores-caracterisricas-segun-categoria',{sIdArticulo:sIdArticulo}).
    success(function(data, status, headers, config) {
        $scope.entities = data.oResultado;
        //console.log($scope.entities);
    }).
    error(function(data, status, headers, config) {
        // log error
    });

    $scope.updateSelection = function(position, entities) {
        angular.forEach(entities, function(subscription, index) {
            if (position != index) 
                subscription.checked = false;
        });
    }

});
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

app.controller('BarraBuscadorController', function($scope,$location){
    /**
     * Reenvia a BuscarController
     */
    $scope.rutaBuscar = function() {
        $location.path('/buscar/'+ $scope.sValorBusqueda);
    }; 
});

app.controller('BuscadorArticulosController', function ($scope, $sce, $q, $http) {
    $scope.dirty = {};
    var states = [];
    function suggest_state(term) {
        //***Ajax obtener todas las caracteristicas de una categoria segun un tag**/
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