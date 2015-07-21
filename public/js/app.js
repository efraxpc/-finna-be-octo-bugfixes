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
        /*
            .when('/', {
            templateUrl : 'pages/about.html',
            controller  : 'aboutController'
        })*/
    });

    app.controller('InicioController', function($scope, $routeParams) {
        $scope.mostrar_productos = true;
        $scope.cambiarMostrar_productos = function(newVal) {
            $scope.mostrar_productos = newVal;
        };
    });

    app.controller('ClickMenuController', function($scope, $routeParams) {
        $scope.primerMetodo = function() {
            $scope.cambiarMostrar_productos(false);
            console.log("ClickMenuController");
            console.log($scope.mostrar_productos);
        };
    });

    app.controller('AjaxBuscarProductosController', function($scope,$routeParams,$http) {
        $scope.id_caracteristica = $routeParams.id_caracteristica;
        console.log($scope.id_caracteristica);

        //ajax obtener productos segun descripcion_caracteristica
        $http.post('api/obtener/articulos/segun/caracteristica',{id_caracteristica: $scope.id_caracteristica}).
        success(function(data, status, headers, config) {
            $scope.oArticulos = data.oResultado;
            //console.log($scope.oArticulos);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    });

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
    app.controller('ContentsController',function($scope, Contents){
        $scope.contents = new Contents();
        /*
        $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
            $('#imagen_1').attr('src','images/home/product1.jpg')
        });*/
    });

    app.controller('MenuCategoriasController', function($scope,$http) {
        //ajax obtener categorias
        $http.get('api/obtener/categorias/menu/home').
        success(function(data, status, headers, config) {
            $scope.categorias = data.oResultado;
            //console.log($scope.categorias);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
        //ajax obtener caracteristicas
        $http.get('api/obtener/caracteristicas/menu/home').
        success(function(data, status, headers, config) {
            $scope.caracteristicas = data.oResultado;
            //            console.log(data.oResultado);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    });      
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
    // Proceso de paginacion
    app.factory('Contents',function($http){
        var Contents = function(){
            this.items = [];
            this.busy = false;
            this.page = 1;
        }

        Contents.prototype.nextPage = function(){
            if(this.busy) return;
            this.busy = true;
            var url = 'api/contents/articulos?page='+this.page;

            $http.get(url).success(function(oDatos){
                //console.log(oDatos.data);
                for(var i = 0; i < oDatos.data.length; i++ ){
                    this.items.push(oDatos.data[i]);
                }

                this.page++;
                this.busy = false;
            }.bind(this));
        };
        return Contents;
    });  
}).call(this);