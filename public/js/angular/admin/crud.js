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
    $scope.cambiariBlurAgregarCaracteristicas  = function(newVal){
        $scope.iBlurAgregarCaracteristicas = newVal;
    }
    $scope.cambiarMostrarSeccionSecundariaAgregarArticulo = function(newVal) {
        $scope.iMostrarSeccionSecundariaAgregarArticulo = newVal;
    }
    $scope.cambiariAgregarArticulo = function(newVal){
        $scope.iAgregarArticulo = newVal;
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
            $scope.cambiarItipo(data.oResultado[0].tipo);
            $scope.mensaje = data.oResultado[0].mensajes;
            console.log($scope.tipo );
            //caso haya seteado en la bd
            if ($scope.tipo === 2){
                //recargar pagina
                $scope.cambiariNotificacion(1);
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
            $scope.cambiariExito(data.oResultado[0].tipo);
            $scope.mensaje = data.oResultado[0].mensajes;
            $scope.cambiariExito(data.oResultado[0].exito_modificar);
            //console.log($scope.iExito);
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
            var iIdArticuloRecienCreado = data.oResultado[0].id_articulo_recien_creado;
            console.log(iIdArticuloRecienCreado);

            if(iTupla === 1){
                $scope.iExito = 1;
                //$scope.cambiariExito(1);
                //$state.go('articulos');
                $state.go('articulos-agregar-paso-2', { id_articulo: iIdArticuloRecienCreado });
                //$scope.cambiariExito(0);
            }
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    }
});

