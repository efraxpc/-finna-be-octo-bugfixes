<div class="card" ng-init="ocultarBuscador();">
    <div class="row" ng-init="obtenerPreciosArticulo();">
        <div class="col-md-12">
            <!-- Formulario -->
            <div class="col-lg-offset-2 col-md-8 col-sm-6">
                <div class="card-body">
                    <form class="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="regular1" ng-model="articulo.titulo">
                            <label for="regular1">Titulo</label>
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
                            <input type="text" class="form-control" id="help1">
                            <label for="help1">Input with help text</label>
                            <p class="help-block">Help text</p>
                        </div>
                        <div class="form-group">
                            <select id="select1" name="select1" class="form-control">
                                <option value="{{articulo.id_categoria}}" selected>{{articulo.nombre_categoria}}</option>
                                <option ng-repeat="categoria in categorias" value="{{categoria.id}}">{{categoria.nombre}}</option>
                            </select>
                            <label for="select1">Categoria</label>
                        </div>
                        <div class="form-group">
                            <textarea name="textarea1" id="textarea1" class="form-control" rows="3" placeholder="" ng-model="articulo.descripcion"></textarea>
                            <label for="textarea1">Descipcion</label>
                        </div>
                        <div class="form-group">
                            <label>Activo</label>
                            <div class="card-body">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn ink-reaction btn-primary">
                                        <input type="radio" name="options" id="option1" ng-checked="articulo.activo == 1" ng-class="{active: (articulo.activo == 1)}"> Si
                                    </label>
                                    <label class="btn ink-reaction btn-primary">
                                        <input type="radio" name="options" id="option3" ng-checked="articulo.activo == 0" ng-class="{warning: (articulo.activo == 1)}"> No
                                    </label>
                                </div><!--end .btn-group -->
                            </div><!--end .card-body -->
                        </div>
                    </form>
                </div><!--end .card-body -->
            </div>
        </div>
    </div>
</div>

