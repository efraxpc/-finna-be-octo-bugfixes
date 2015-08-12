var app = angular.module('appAdmin');
//ojo pasar las funciones de terceros a otro archivo
app.controller('CrudController', function($scope,$http,$state,$stateParams,$location, $rootScope) {
    $scope.validarObjetoVacio = function isEmpty(obj) {
        for(var prop in obj) {
            if(obj.hasOwnProperty(prop))
                return false;
        }
        return true;
    }

    $scope.cambiarMostrarSeccionSecundariaAgregarArticulo = function(newVal) {
        $scope.iMostrarSeccionSecundariaAgregarArticulo = newVal;
    }

    $scope.cambiariExito = function(newVal) {
        $scope.iExito = newVal;
    }
    $scope.cambiarMensaje = function(newVal) {
        $scope.mensaje = newVal;
    }
    $scope.cambiariNotificacion = function(newVal) {
        $scope.iNotificacion = newVal;
    }    
    $scope.cambiarItipo = function(newVal) {
        $scope.tipo = newVal;
    }   
    $scope.cambiarIError = function(newVal) {
        $scope.error = newVal;
    }  
    /**
     * Ocultar el buscador de articulos
     */
    $scope.cambiarIMostrarBuscador = function(newVal){
        $scope.bMostrarBuscador = newVal;
    }
    /**
     * Mostrar el buscador de articulos
     */
    $scope.mostrarBuscador = function(){
        $scope.bMostrarBuscador = true;
    }

    /**
     * Ajax para obtener todos los articulos ordenados por antiguedad
     */
    $scope.obtenerArticulosSinPaginar = function() {
        $http.get('api-obtener-articulos-sin-paginacion').
        success(function(data, status, headers, config) {
            $scope.articulos = data.oResultado;
            //console.log($scope.articulos);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }

    $scope.editar = function(id_articulo){
        $location.path('/editar-articulo/'+id_articulo);
    }

    /**
     * Ajax para obtener todos precios del articulo
     */
    $scope.obtenerPreciosArticulo = function() {
        //ocultar la etiqueta de mensajes
        //$scope.tipo = 0;  cambiar

        $http.post('api-obtener-historico-precios-segun-articulo',{sIdArticulo : $stateParams.id_articulo}).
        success(function(data, status, headers, config) {
            $scope.precios_articulos = data.oResultado;
            //console.log($scope.precios_articulos);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }
    $scope.editar = function(id_articulo){
        $location.path('/editar-articulo/'+id_articulo);
    }

    /**
     * Agregar una caracteristica de un articulo
     */
    $scope.agregarValorCaracteristica = function(){
        //ojo
        //$scope.tipo = 0;
        /*
        $scope.cambiarItipo(0);
        $scope.cambiarIError(0);
        */
        //$scope.error = 0; 
        var sCaracteristica = document.getElementById('sValorCaracteristica').value;
        $scope.sIdCategoria = document.getElementById('sValorCaracteristica').getAttribute("valor-categoria");
        var oInputCheck = document.getElementsByClassName("input-check");

        $.each(oInputCheck, function( iIndice, oValor ) {
            //Obtener cual caracteristica esta en CKECK
            if(oValor.checked == true){
                $scope.sIdCaracteristica = oValor.getAttribute("id_caracteristica");
            }
        });
        //***Ajax setear caracteristica en administracion de articulos***//
        $http.post('api-setear-caracterisricas-articulos-backend',{sValorCaracteristica: sCaracteristica, sIdCategoria : $scope.sIdCategoria, sIdCaracteristica : $scope.sIdCaracteristica, sIdArticulo:$stateParams.id_articulo}).
        success(function(data, status, headers, config) {
            //var iResultado = data.oResultado[0].tupla;
            $scope.tipo = data.oResultado[0].tipo;
            //$scope.cambiarItipo(data.oResultado[0].tipo);
            $scope.mensaje = data.oResultado[0].mensajes;
            $scope.cambiariExito(data.oResultado[0].exito_caracteristica);
            //caso haya seteado en la bd
            if ($scope.iExito === 1){
                //recargar pagina
                $state.go($state.current, {}, {reload: true},1000);             
            }else{
                //$scope.cambiarIError(true);
                $scope.error = true;
            }
        }).
        error(function(data, status, headers, config) {
            // log error
        });
        $scope.sIdCaracteristica = "";
    }

    /**
     * Obtiene las caracteristicias asociadas a un articulo y son llenadas en la tabla de caracteristicas en el mantenimiento de articulos
     */
    $scope.cargarCaracterislicasDeArticulo = function(){
        $http.post('api-obtener-valores-caracteristicas-articulo-backend',{sIdArticulo:$stateParams.id_articulo}).
        success(function(data, status, headers, config) {
            $scope.caracteristicas_tabla = data.oResultado;
            //console.log($scope.caracteristicas_tabla);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }

    /**
     * Click para modificar un articulo
     */
    $scope.modificarArtitulo = function(){
        //$scope.tipo = 0; cambiar
        var sTitulo = document.getElementById('titulo').value;
        var sDescripcion = document.getElementById('descripcion').value;
        var iCategoria = document.getElementById('categoria').value;
        var sIdArticulo = $stateParams.id_articulo;
        var sPrecio = document.getElementById('precio').value;

        //saber si #habilitao esta checked o no
        if ($('#habilitado').is(":checked")){
            var iHabilitado = 1;
        }else{
            var iHabilitado = 0;
        }
        //Ajax para modificar un articulo
        $http.post('api-actualizar-articulo-backend',{sIdArticulo:sIdArticulo,sTitulo:sTitulo,sDescripcion:sDescripcion,
                                                      iCategoria:iCategoria,iHabilitado:iHabilitado,sPrecio:sPrecio}).
        success(function(data, status, headers, config) {
            var iResultado = data.oResultado[0].tupla;
            $scope.tipo = data.oResultado[0].tipo;
            $scope.cambiariExito(data.oResultado[0].exito_modificar);
            $scope.mensaje = data.oResultado[0].mensajes;
            //console.log($scope.iExito);
            //caso haya seteado un nuevo precio en la bd
            /*
            if( $scope.iExito === 1){
                //recargar la pagina con delay
                $state.go($state.current, {}, {reload: true},3000);
            }*/
            //$state.transitionTo($state.current, $stateParams, { reload: true, inherit: false});
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }
    /**
     * Agregar un articulo, con validaciones
     * @param {integer} iIdcategoria
     */
    $scope.AgregarArtitulo = function(iIdcategoria){
        var sTitulo = document.getElementById('titulo').value;
        var sDescripcion = document.getElementById('descripcion').value;
        var iCategoria = iIdcategoria;
        var sPrecio = document.getElementById('precio').value;

        //saber si #habilitao esta checked o no
        if ($('#habilitado').is(":checked")){
            var iHabilitado = 1;
        }else{
            var iHabilitado = 0;
        }
        //console.log(iCategoria);

        //Ajax para setear un articulo
        $http.post('api-setear-articulo-backend',{sTitulo:sTitulo,sDescripcion:sDescripcion,
                                                  iCategoria:iCategoria,iHabilitado:iHabilitado,sPrecio:sPrecio}).
        success(function(data, status, headers, config) {
            var iResultado = data.oResultado[0];
            $scope.tipo = data.oResultado[0].tipo;
            var iTupla = data.oResultado[0].tupla;
            $scope.mensaje = data.oResultado[0].mensajes;
            console.log(iTupla);

            if(iTupla === 1){
                $scope.iExito = 1;
                $state.go('articulos');
            }
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }
    $scope.mostrarBuscador = function(){
        $scope.cambiarIMostrarBuscador(true);
    }
});

