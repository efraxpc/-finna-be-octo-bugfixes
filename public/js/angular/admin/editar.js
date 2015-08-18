var app = angular.module('appAdmin');
app.controller('ProcesarEditarArticuloController', function($http,$scope,$location,$stateParams,$state){

    var sEstadoActual = $state.includes('articulos-agregar-paso-2');
    // caso ruta actual sea AGREGAR SEGUNDO PASO, hacer blur en agregar caracteristicas
    if(sEstadoActual){
        $scope.cambiariBlurAgregarCaracteristicas(1);
    }

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

app.controller('SeleccionarCategoriaController', function($scope,$http,$stateParams,$state) {
    //reiniciar variable iExito que muestra mensjae de exito
    /**
     * Evento cambiar de categoria en el select de modificar articulos
     */
    $scope.EventoCambiarCategoria = function(){
        $scope.reinicializarVariables();
        //***Ajax obtener todas las categorias condicionado***//
        $http.post('api-setear-categorias-backend',{sIdArticulo : $stateParams.id_articulo,iIdCategoria:$scope.selection.categoria}).
        success(function(data, status, headers, config) {
            $scope.cambiarMensaje(data.oResultado[0].mensajes);
            var iTipo = data.oResultado[0].tipo;
            if( iTipo === 2){
                $scope.cambiariNotificacion(1);
                //recargar la pagina con delay
                $state.go($state.current, {}, {reload: true},1000);
            }
        }).error(function(data, status, headers, config) {
            // log error
        });  
    }
});


