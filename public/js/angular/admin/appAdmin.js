var app = angular.module('appAdmin',["ui.router","ngSanitize","MassAutoComplete","growlNotifications","uiRouterStyles","ngFileUpload"]);


app.config(function($stateProvider, $urlRouterProvider) {
    //
    // For any unmatched url, redirect to /state1
    $urlRouterProvider.otherwise("/");
    //
    // Now set up the states
    $stateProvider
        .state('index', {
        url: "/",
        templateUrl: "templates/admin/index.php",
        controller: "InicioController"
    })
        .state('articulos', {
        url: "/articulos",
        templateUrl: "templates/admin/articulos.php",

    })
        .state('categorias', {
        url: "/categorias",
        templateUrl: "templates/admin/categorias.php",

    })
        .state('articulos-agregar', {
        url: "/articulos-agregar",
        templateUrl: "templates/admin/articulos_agregar.php",
        controller: "ProcesarAgregarArticuloController"
    })
        .state('categorias-agregar', {
        url: "/categorias-agregar",
        template: "Categorias",
        //controller: "ProcesarAgregarArticuloController"
    })
        .state('articulos-editar', {
        url: "/editar-articulo/:id_articulo",
        templateUrl: "templates/admin/articulos_editar.php",
        controller: "ProcesarEditarArticuloController"
    })
        .state('categorias-editar', {
        url: "/editar-categoria/:id_categoria",
        templateUrl: "templates/admin/categorias_editar.php",
        controller: "ProcesarEditarCategoriaController"
    })
        .state('articulos-agregar-paso-2', {
        url: "/articulos-agregar-paso-dos/:id_articulo",
        templateUrl: "templates/admin/articulos_editar.php",
        controller: "ProcesarEditarArticuloController"
    })
        .state('buscar', {
        url: "/buscar/:textoBuscador",
        templateUrl: "templates/admin/resultado_buscador.php",
        controller: "BuscarController"
    })
});


app.controller('InicioController',function($scope,$state,$stateParams,$location){
    //reiniciar Itipo, quitando mensaje de error
    $scope.cambiarItipo(0);
    //reiniciar iExito, quitando mensaje de exito
    $scope.cambiariExito(0);

    $scope.cambiarIMostrarBuscador(1);
});
app.controller('ExampleController', ['$scope', function($scope) {
    $scope.templates = 'templates/admin/subir_imagenes.php';
}]);
/**
* Obtiene todas las caracteristicas de una categoria, aplicada al mentenimeinto de articulos
*/
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
