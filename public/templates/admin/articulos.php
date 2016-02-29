<div class="row" ng-init="obtenerArticulosSinPaginar();cambiarIMostrarBuscador(0);cambiarIExito(0);">
    <!--        <div class="col-md-1">
<button type="button" class="btn btn-success" ui-sref="articulos-agregar" ng-click="cambiarMostrarSeccionSecundariaAgregarArticulo(0);cambiariExito(0);cambiariNotificacion(0);cambiarIError(0);cambiarItipo(0);">Agregar</button>
</div>-->
    <!-- Barrita de buscador -->
    <div class="col-md-12">
        <div class="scroll-area" data-spy="scroll" data-offset="0">
            <div class="section-body">               
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Precio</th>
                            <th class="text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <growl-notification ng-if="iExito == 1" ng-click="$growlNotification.remove()" style="background: rgba(81, 255, 44, 1)">
                            <div class="row">
                                <div class="col-md-8">
                                    {{mensaje}}
                                </div>
                            </div>
                        </growl-notification>
                        <tr ng-repeat="articulo in articulos">
                            <td><img ng-src="{{articulo.ruta}}{{articulo.archivo}}" height="40" width="42"/></td>
                            <td>{{articulo.titulo}}</td>
                            <td > <p ng-hide="articulo.precio == 0">{{articulo.precio}} Bs.F</p></td>
                            <td class="text-right">
                                <a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Edit row" ng-click="editar(articulo.id);reinicializarVariables();"><i class="fa fa-pencil" ></i></a>
                                <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!--end .section-body -->
        </div>
    </div>

</div>