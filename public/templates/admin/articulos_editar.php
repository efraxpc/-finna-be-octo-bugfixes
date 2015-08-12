<div class="card">
    <div class="row" ng-init="obtenerPreciosArticulo();cambiarIMostrarBuscador(1);">
        <div class="col-md-1">
            <div class="form-group text-center">
                <img ng-src="{{articulo.archivo}}" class="img-rounded" height="310" width="310"/>
            </div>           
        </div>
        <div class="col-md-11">
            <!-- Formulario -->
            <div class="col-lg-offset-2 col-md-8 col-sm-6">
                <div class="card-body" ng-controller="ObtenerChecksCaracteristicasController">
                    <form class="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="titulo" ng-model="articulo.titulo">
                            <label for="regular1">Titulo</label>
                        </div>
                        <div class="form-group">
                            <textarea name="textarea1" id="descripcion" class="form-control" rows="3" placeholder="" ng-model="articulo.descripcion"></textarea>
                            <label for="textarea1">Descipcion</label>
                        </div>
                        <div class="form-group" ng-controller="SeleccionarCategoriaController">
                            <select id="categoria" name="select1" class="form-control" ng-change="EventoCambiarCategoria();" ng-model="selection.categoria">
                                <option value="{{articulo.id_categoria}}" selected>{{articulo.nombre_categoria}}</option>
                                <option ng-repeat="categoria in categorias" value="{{categoria.id}}">{{categoria.nombre}}</option>
                            </select>
                            <label for="select1">Categoria</label>
                        </div>
                        <!--                        <div class="form-group" ng-controller="selectController">
<select ng-change="EventoCambiarCategoria();" ng-model="selection.item">
<option value="">Clothing</option>
<option ng-repeat="item in clothes">{{ item }}</option>
</select>
<p>
Selection: <code>{{ selection }}</code>
</p>
</div>-->
                        <!-- Notificacion de error-->
                        <growl-notification ng-if="tipo == 1" ng-click="$growlNotification.remove()">
                            <div class="row">
                                <div class="col-md-8">
                                    {{mensaje}}
                                </div>
                            </div>
                        </growl-notification>
                        <!-- Fin Notificacion de error-->
                        <!-- Notificacion de satisfactoriedad-->
                        <growl-notification ng-if="iExito == 1" ng-click="$growlNotification.remove()" style="background: rgba(81, 255, 44, 1)">
                            <div class="row">
                                <div class="col-md-8">
                                    {{mensaje}}
                                </div>
                            </div>
                        </growl-notification>
                        <growl-notification ng-if="iNotificacion === 1" ng-click="$growlNotification.remove()" style="background: rgba(255, 186, 44, 0.9)">
                            <div class="row">
                                <div class="col-md-8">
                                    {{mensaje}}
                                </div>
                            </div>
                        </growl-notification>
                        <!-- Fin Notificacion de satisfactoriedad-->
                        <div class="form-group">
                            <input type="text" class="form-control" value={{articulo.precio}} id="precio">
                            <label for="regular1">Precio</label>
                        </div>
                        <div class="form-group">
                            <div class="scroll-area-historico-precios" data-spy="scroll" data-offset="0">
                                <div class="section-body">   
                                    <table style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Precio</th>
                                                <th>Valido desde</th> 
                                                <th>Valido hasta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="precio_articulo in precios_articulos">
                                                <td>{{precio_articulo.precio}} S/.</td>
                                                <td>{{precio_articulo.valido_desde}}</td> 
                                                <td>{{precio_articulo.valido_hasta}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <label for="password1">Historico de precios</label>
                        </div>

                        <div class="form-group">
                            <div class="checkbox checkbox-styled tile-text">
                                <label>
                                    <input type="checkbox" id="habilitado" ng-model="articulo.activo" ng-checked="articulo.activo == 1">
                                    <span>
                                        <small>Habilitado</small>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <!-- Button to display second notification -->
                        <div class="form-group">
                            <div ng-controller="BuscadorArticulosController">
                                <div mass-autocomplete>
                                    <input ng-model="dirty.value" id="sValorCaracteristica" class="form-control" mass-autocomplete-item="autocomplete_options" ng-change="foo();" valor-categoria = {{articulo.id_categoria}}>
                                </div>
                            </div>
                            <label>Buscar caracteristicas por...</label>
                        </div>
                        <div class="form-group" >
                            <div class="checkbox checkbox-styled tile-text" ng-repeat="subscription in entities">
                                <label>
                                    <input class="input-check" type="checkbox" ng-model="subscription.checked" ng-click="updateSelection($index, entities)" id_caracteristica={{subscription.id}} />
                                    <span>
                                        <small>{{subscription.nombre}}</small>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-block ink-reaction btn-flat btn-accent-light" ng-click="agregarValorCaracteristica()">Agregar caracteristica</button>
                            </div>
                        </div>
                        <div class="scroll-area-caracteristicas" data-spy="scroll" data-offset="0">
                            <div class="florm-group" ng-init="cargarCaracterislicasDeArticulo();">
                                <section class="style-default-bright">
                                    <div class="section-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Tipo</th>
                                                    <th>Valor</th>
                                                    <th class="text-right">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="caracteristica_tabla in caracteristicas_tabla">
                                                    <td>{{caracteristica_tabla.nombre}}</td>
                                                    <td>{{caracteristica_tabla.valor}}</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--end .section-body -->
                                </section>

                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-4  col-md-offset-4">
                                <button type="button" class="btn btn-block ink-reaction btn-success" ng-click="modificarArtitulo();cambiariNotificacion(0);">Modificar</button>
                            </div>
                        </div>
                    </form>
                </div><!--end .card-body -->
            </div>
        </div>
    </div>
</div>
