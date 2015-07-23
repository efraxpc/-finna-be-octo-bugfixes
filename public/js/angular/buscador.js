(function(){
    var app = angular.module('app');

    app.controller('BuscadorController', function($scope,$location,articulos_segun_tag) {
        $scope.buscar = function() {
            $location.path('/buscador');
            $scope.nextPage = 'buscador';
            $scope.articulos_segun_tag = new articulos_segun_tag($scope.sValorBusqueda);
            $scope.cambiarMostrar_productos(false);
            console.log($scope.articulos_segun_tag.nextPage());
            console.log($scope.sValorBusqueda);
        }; 
    });

    // Proceso de paginacion
    app.factory('articulos_segun_tag',function($http){
        var articulos_segun_tag = function(sValorBusqueda){
            this.items = [];
            this.busy  = false;
            this.page  = 1;
            this.sValorBusqueda = sValorBusqueda;
        }

        articulos_segun_tag.prototype.nextPage = function(){
            if(this.busy) return;
            this.busy = true;
            var url   = 'api/obtener/articulos/segun/tag?page='+this.page;
            var sValorBusqueda =  this.sValorBusqueda;

            $http.post(url,{sTag : sValorBusqueda}).success(function(oDatos){
                console.log('aqui');
                console.log(oDatos);
                for(var i = 0; i < oDatos.data.length; i++ ){
                    this.items.push(oDatos.data[i]);
                }

                this.page++;
                this.busy = false;
            }.bind(this));
        };
        return articulos_segun_tag;
    });

}).call(this);