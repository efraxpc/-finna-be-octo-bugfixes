/*
var app = angular.module('appAdmin',["ngRoute"]);

// configure our routes
app.config(function($routeProvider) {
    $routeProvider

        .when('/articulos', {
        templateUrl : 'templates/admin/articulos.php',
        controller  : 'CrudController'
    })
        .when('/', {
        templateUrl : 'templates/admin/index.php',
        controller  : 'CrudController'
    })
        .otherwise({
        redirectTo: '/'
    }); 
});
*/
var app = angular.module('appAdmin',["ui.router"]);

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
    /*        .state('state1.list', {
        url: "/list",
        templateUrl: "partials/state1.list.html",
        controller: function($scope) {
            $scope.items = ["A", "List", "Of", "Items"];
        }
    })*/
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

app.controller('CrudController', function($scope,$http,$state,$stateParams,$location,$location) {
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
        //console.log('estoy mostrando un buscador');
    }

    /**
     * Ajax para obtener todos los articulos ordenados por antiguedad
     */
    $scope.obtenerArticulosSinPaginar = function() {
        $http.get('api/obtener/articulos/sin/paginacion').
        success(function(data, status, headers, config) {
            $scope.articulos = data.oResultado;
            //console.log($scope.articulos);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }

    $scope.editar = function(id_articulo){
        $location.path('/editar-articulo/'+id_articulo);
    }

});
app.controller('ProcesarEditarController', function($http,$scope,$location,$stateParams){
    $http.post('api/obtener/datos/articulos/backend',{sIdArticulo : $stateParams.id_articulo}).
    success(function(data, status, headers, config) {
        $scope.articulo = data.oResultado;
        $scope.articulo = {titulo: $scope.articulo.titulo
                           ,descripcion: $scope.articulo.descripcion
                           ,activo : $scope.articulo.activo};

        console.log($scope.articulo.activo);
    }).
    error(function(data, status, headers, config) {
        // log error
    });


    $scope.set = function(titulo,descripcion,activo) {
        this.articulo.titulo = titulo;
        this.articulo.descripcion = descripcion;
        this.articulo.activo = activo;

    }
});

app.controller('BuscarController', function($http,$scope,$location,$stateParams){
    var sTextoBuscador = $stateParams.textoBuscador;
    //console.log(textoBuscador);

    $http.post('api/obtener/articulos/buscador/backend',{sTextoBuscador:sTextoBuscador}).
    success(function(data, status, headers, config) {
        $scope.articulos = data.oResultado;
        //console.log($scope.articulos);
    }).
    error(function(data, status, headers, config) {
        // log error
    });
    //console.log('buscando...');
});

app.controller('BarraBuscadorController', function($scope,$location){
    /**
     * Reenvia a BuscarController
     */
    $scope.rutaBuscar = function() {
        $location.path('/buscar/'+ $scope.sValorBusqueda);
    }; 
});
