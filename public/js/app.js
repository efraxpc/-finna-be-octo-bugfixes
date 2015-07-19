(function(){

    var app = angular.module('app',['infinite-scroll']);

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

    app.controller('MenuController', function($scope,$http) {
        $http.get('api/obtener/menus').
        success(function(data, status, headers, config) {
            $scope.categorias = data.oResultado;
            console.log($scope.categorias);
        }).
        error(function(data, status, headers, config) {
            // log error
        });

    });      

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