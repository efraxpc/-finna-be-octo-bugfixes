var app = angular.module('appAdmin');
app.controller('ImagenController', function($http,$scope,$location,$stateParams,$state){
    $scope.setearImagenPrincipalArticuloBackend = function(id_imagen){
        $scope.reinicializarVariables();
        //Ajax setear como principal una imagen de un articulo
        $http.post('api-setear-principal-segun-articulo-backend',{id_imagen : id_imagen,id_articulo: $stateParams.id_articulo}).
        success(function(data, status, headers, config) {
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
});

