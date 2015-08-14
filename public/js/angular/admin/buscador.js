(function(){
    var app = angular.module('app');

    app.controller('BarraBuscadorController', function($scope,$location,$route,Articulos_segun_tag){
        $scope.buscar = function() {
            $location.path('/buscar/'+ $scope.sValorBusqueda);
            $scope.nextPage = 'buscador';
            //$scope.articulos_segun_tag = new Articulos_segun_tag();
            //console.log($scope.articulos_segun_tag);
            //console.log($scope.sValorBusqueda);
        }; 
    });

    app.controller('BuscadorController', function($scope,$location,Articulos_segun_tag) {
        $scope.articulos_segun_tag = new Articulos_segun_tag();
        //console.log($scope.articulos_segun_tag);
    });
    // Proceso de paginacion
    app.factory('Articulos_segun_tag',function($http,$routeParams){
        var Articulos_segun_tag = function(){
            this.items = [];
            this.busy  = false;
            this.page  = 1;
        }

        Articulos_segun_tag.prototype.nextPage = function(){
            if(this.busy) return;
            this.busy = true;
            var url   = 'api/obtener/articulos/segun/tag?page='+this.page;

            $http.post(url,{sEntrada : $routeParams.textoBuscador}).success(function(oDatos){
                //console.log('aqui');
                //console.log(oDatos);
                for(var i = 0; i < oDatos.data.length; i++ ){
                    this.items.push(oDatos.data[i]);
                }
                this.page++;
                this.busy = false;
            }.bind(this));
        };
        return Articulos_segun_tag;
    });

}).call(this);