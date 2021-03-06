<div class="row">
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
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="articulo in articulos">
                            <td><img ng-src="{{articulo.ruta}}{{articulo.archivo}}" height="42" width="42"/></td>
                            <td>{{articulo.titulo}}</td>
                            <td>{{articulo.precio}} Bs.F</td>
                            <td class="text-right">
                                <a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Edit row" ng-click="editar(articulo.id);"><i class="fa fa-pencil" ></i></a>
                                <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!--end .section-body -->
        </div>
    </div>
</div>
