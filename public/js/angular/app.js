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

            .when('/buscar/:textoBuscador', {
            templateUrl : 'templates/resultado_buscador.php',
            controller  : 'BuscadorController',
        })

            .when('/', {
            templateUrl : 'templates/index.php',
            controller  : 'PortadaController'
        })
            .otherwise({
            redirectTo: '/'
        }); 
    });

    app.controller('InicioController', function($scope,$http) {
        $scope.esconder_inicio = function() {
            $scope.mostrar_productos = false;
        };
        $scope.mostrar_inicio = function() {
            $scope.mostrar_productos = true;
        };
        $scope.cambiarMostrar_productos = function(newVal) {
            $scope.mostrar_productos = newVal;
        };

/*        $scope.mostrar_imagen = function(){
            $http.get('obtener_imagen').
            success(function(data, status, headers, config) {
                $scope.imagen = data.oResultado;
                console.log($scope.imagen);
            }).
            error(function(data, status, headers, config) {
                // log error
            });
        }*/
        /*
        $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
            console.log('hola');
        });
        */
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
    });  
    */
}).call(this);