<div class="row" ng-init="cambiarIMostrarBuscador(1);">
    <div class="col-md-9">
        <!-- Formulario -->
        <div class="col-lg-offset-4 col-md-8 col-sm-6">
            <div class="card-body">
                <form class="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="titulo" ng-model="categoria.nombre">
                        <label for="regular1">Titulo</label>
                    </div>
                    <div class="form-group">
                        <textarea name="textarea1" id="descripcion" class="form-control" rows="3" placeholder="" ng-model="categoria.descripcion"></textarea>
                        <label for="textarea1">Descipcion</label>
                    </div>

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
                        <div class="checkbox checkbox-styled tile-text">
                            <label>
                                <input type="checkbox" id="habilitado" ng-model="categoria.activo" ng-checked="categoria.activo == 1">
                                <span>
                                    <small>Habilitado</small>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-4  col-md-offset-4">
                            <button type="button" class="btn btn-block ink-reaction btn-success" ng-click="modificarArtitulo();reinicializarVariables();">Modificar</button>
                        </div>
                    </div>
                </form>
            </div><!--end .card-body -->
        </div>
    </div>
</div>
