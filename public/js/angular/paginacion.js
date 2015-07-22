(function(){
    var app = angular.module('app');  

    ///////// paginacion home
    app.controller('ContentsController',function($scope, Contents){
        $scope.contents = new Contents();
        /*
        $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
            $('#imagen_1').attr('src','images/home/product1.jpg')
        });*/
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
  
    //////// paginacion segun caracteristica
    app.controller('AjaxBuscarProductosSegunCaracteristicaController', function($scope,articulos_segun_caracteristica) {
        $scope.articulos_segun_caracteristica = new articulos_segun_caracteristica();   
        $scope.cambiarMostrar_productos(false);
        console.log($scope.articulos);
    });

    // Proceso de paginacion
    app.factory('articulos_segun_caracteristica',function($http,$routeParams){
        var articulos_segun_caracteristica = function(){
            this.items = [];
            this.busy = false;
            this.page = 1;
        }

        articulos_segun_caracteristica.prototype.nextPage = function(){
            if(this.busy) return;
            this.busy = true;
            var url = 'api/obtener/articulos/segun/caracteristica?page='+this.page;

            $http.post(url,{id_caracteristica : $routeParams.id_caracteristica}).success(function(oDatos){
                console.log('aqui');
                console.log(oDatos);
                for(var i = 0; i < oDatos.data.length; i++ ){
                    this.items.push(oDatos.data[i]);
                }

                this.page++;
                this.busy = false;
            }.bind(this));
        };
        return articulos_segun_caracteristica;
    });
    /////////// paginacion segun categoria
    app.controller('AjaxBuscarProductosSegunCategoriaController', function($scope,articulos_segun_categorias) {
        $scope.cambiarMostrar_productos(false);
        $scope.articulos_segun_categorias = new articulos_segun_categorias();   
        console.log($scope.articulos_segun_categorias);
    });

    // Proceso de paginacion
    app.factory('articulos_segun_categorias',function($http,$routeParams){
        var articulos_segun_categorias = function(){
            this.items = [];
            this.busy = false;
            this.page = 1;
        }

        articulos_segun_categorias.prototype.nextPage = function(){
            if(this.busy) return;
            this.busy = true;
            var url = 'api/obtener/articulos/segun/categoria?page='+this.page;

            $http.post(url,{id_categoria : $routeParams.id_categoria}).success(function(oDatos){
                console.log('aqui');
                console.log(oDatos);
                for(var i = 0; i < oDatos.data.length; i++ ){
                    this.items.push(oDatos.data[i]);
                }

                this.page++;
                this.busy = false;
            }.bind(this));
        };
        return articulos_segun_categorias;
    });
}).call(this);