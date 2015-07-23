(function(){
    var app = angular.module('app',["infinite-scroll","ngRoute"]);

    // configure our routes
    app.config(function($routeProvider) {
        $routeProvider

        // route for the home page
            .when('/caracteristica/:id_caracteristica', {
            templateUrl : 'templates/caracteristica.php',
            controller  : 'InicioController'
        })
            .when('/categoria/:id_categoria', {
            templateUrl : 'templates/categoria.php',
            controller  : 'InicioController'
        })

            .when('/buscador/:textoBuscador', {
            templateUrl : 'templates/resultado_buscador.php',
            controller  : 'BuscadorController',
        })

            .when('/', {
            templateUrl : 'templates/index.php',
            controller  : 'ContentsController'
        })
            .otherwise({
            redirectTo: '/'
        }); 
    });

    app.controller('InicioController', function($scope) {
        $scope.esconder_inicio = function() {
            $scope.mostrar_productos = false;
        };
        $scope.mostrar_inicio = function() {
            $scope.mostrar_productos = true;
        };
        $scope.cambiarMostrar_productos = function(newVal) {
            $scope.mostrar_productos = newVal;
        };
        /*
        $scope.cambiarBuscador = function(newVal) {
            $scope.buscador = newVal;
        };*/
    });

    /////////////
    // linkar evento luego de que ng-repeat termine
    /*
    app.directive('onFinishRender', function ($timeout) {
        return {
            restrict: 'A',
            link: function (scope, element, attr) {
                if (scope.$last === true) {
                    $timeout(function () {
                        scope.$emit('ngRepeatFinished');
                    });
                }
            }
        }
    });  */

    //Controlador

    /*
    app.controller('MenuCaracteristicasController', function($scope,$http) {
        $http.get('api/obtener/caracteristicas/menu/home').
        success(function(data, status, headers, config) {
            $scope.caracteristicas = data.oResultado;
            //            console.log(data.oResultado);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    });      
    */

}).call(this);