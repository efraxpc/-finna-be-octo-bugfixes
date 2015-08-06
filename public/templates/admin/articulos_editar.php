<div class="card" ng-init="ocultarBuscador();">
    <div class="row">
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
                            <input type="password" class="form-control" id="password1">
                            <label for="password1">Password</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="placeholder1" placeholder="Placeholder">
                            <label for="placeholder1">Placeholder</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="help1">
                            <label for="help1">Input with help text</label>
                            <p class="help-block">Help text</p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="tooltip1" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" data-original-title="Example input tooltip text here">
                            <label for="help1">Input with tooltip</label>
                        </div>
                        <div class="form-group">
                            <select id="select1" name="select1" class="form-control">
                                <option value="">&nbsp;</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="60">60</option>
                                <option value="70">70</option>
                            </select>
                            <label for="select1">Select</label>
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




