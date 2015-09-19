var app = angular.module('appAdmin');
app.controller('ImagenController', function($http,$scope,$location,$stateParams,$state){
    $scope.setearImagenPrincipalArticuloBackend = function(id_imagen,sArchivo){
        $scope.reinicializarVariables();
        console.log(sArchivo);
        //Ajax setear como principal una imagen de un articulo

        $http.post('api-setear-principal-segun-articulo-backend',{id_imagen : id_imagen,id_articulo: $stateParams.id_articulo,sArchivo:sArchivo}).
        success(function(data, status, headers, config) {
            console.log(data.oResultado[0]);
            $scope.cambiarMensaje(data.oResultado[0].mensajes);
            $scope.cambiariNotificacion(data.oResultado[0].exito_notificacion);
            if($scope.iNotificacion === 1){
                $state.go($state.current, {}, {reload: true},1000);
            }
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }

    $scope.eliminarImagenArticuloBackend = function(id_imagen,sArchivo){
        $scope.reinicializarVariables();
        //Ajax setear como principal una imagen de un articulo
        $http.post('api-eliminar-imagen-segun-articulo-backend',{id_imagen : id_imagen,id_articulo: $stateParams.id_articulo,sArchivo:sArchivo}).
        success(function(data, status, headers, config) {
            console.log(data.oResultado);
            $scope.cambiarMensaje(data.oResultado[0].mensajes)
            $scope.cambiariExito(data.oResultado[0].exito_eliminar);
            if($scope.iExito === 1){
                $state.go($state.current, {}, {reload: true},1000);
            }
        }).
        error(function(data, status, headers, config) {
            // log error
        });       
    }
});

