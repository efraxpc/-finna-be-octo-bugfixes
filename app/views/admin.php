<!DOCTYPE html>
<html lang="en" ng-app ="appAdmin" ng-controller="CrudController" ng-controller="ImagenController">
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <title>.::Admin::.</title>
        <!-- BEGIN META -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <!-- END META -->
        <script src="admin/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>

        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/bootstrap.css?1422792965" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/materialadmin.css?1425466319" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/font-awesome.min.css?1422529194" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/libs/morris/morris.core.css?1420463396" />
        <link type="text/css" rel="stylesheet" href="libs/mass-autocomplete-master/massautocomplete.theme.css" />

        <!-- END STYLESHEETS -->

        <!--ng-file upload-->
        <script src="https:ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
        <script src="https:ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-sanitize.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular-animate.min.js"></script>
        <script src="libs/angular-growl-notifications/angular-growl-notifications.min.js"></script>
        <script src="../bower_components/angular-ui-router-styles/ui-router-styles.js"></script>
        <!--fin ng-file upload-->


        <script src="js/ng-file-upload-shim.min.js"></script>
        <script src="js/ng-file-upload.min.js"></script>


        <script src="js/angular/admin/appAdmin.js"></script>
        <script src="js/angular/admin/crud.js"></script>
        <script src="js/angular/admin/buscador.js"></script>
        <script src="js/angular/admin/agregar.js"></script>
        <script src="js/angular/admin/editar.js"></script>
        <script src="js/angular/admin/Imagen.js"></script>
        <script src="js/angular/admin/Categorias.js"></script>

        <style>
            #texto_div_subir_imagen{
                color: rgba(0, 0, 0, 0.52);
            }
            .buttone {
                -moz-appearance: button;
                /* Firefox */
                -webkit-appearance: button;
                /* Safari and Chrome */
                padding: 10px;
                margin: 10px;
                width: 70px;
            }
            .drop-box {
                background: #F8F8F8;
                border: 6px dashed #DDD;
                width: auto;
                height: 102px;
                text-align: center;
                padding-top: 25px;
                margin: 0px;
            }
            .dragover {
                border: 5px dashed blue;
            }
        </style>
        <style type="text/css">
            .scroll-area {
                height: 600px;
                position: relative;
                overflow: auto;
            }
            .scroll-area-historico-precios{
                height: 100px;
                position: relative;
                overflow: auto;
            }
            .scroll-area-caracteristicas{
                height: 200px;
                width: auto;
                position: relative;
                overflow: auto;
            }

            [mass-autocomplete] {
                position: relative;
            }
            .ac-container {
                position: absolute;
                top: 100% !important;
                left: 0 !important;
                width: 100% !important;
            }
            .trans{
                background-color:#00BB00;
                color:#CC0000;
                position:absolute;
                text-align:center;
                padding:65px;
                font-size:25px;
                font-weight:bold;
            }
        </style>
        <style>
            growl-notifications {
                position: fixed;
                top: 150px;
                right: 10px;
                z-index: 1000;
            }

            growl-notifications growl-notification {
                background: rgba(215, 44, 44, 0.9);
                color: white;
                padding: 15px 30px;
                width: 200px;
                display: block;
                border-radius: 5px;
                margin-top: 15px;
            }
        </style>
        <!--        <script src="https:ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
<script src="js/angular/admin/appAdmin.js"></script>-->
        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script type="text/javascript" src="admin/assets/js/libs/utils/html5shiv.js?1403934957"></script>
<script type="text/javascript" src="admin/assets/js/libs/utils/respond.min.js?1403934956"></script>
<![endif]-->
    </head>
    <body class="menubar-hoverable header-fixed" >
        <growl-notifications></growl-notifications>

        <!-- BEGIN HEADER-->
        <header id="header">
            <div class="headerbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="headerbar-left" ng-controller="InicioController">
                    <ul class="header-nav header-nav-options">
                        <li class="header-nav-brand" >
                            <div class="brand-holder">
                                <a ng-href="#inicio">
                                    <span class="text-lg text-bold text-primary">Proyecto Catalogo</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="headerbar-right">
                    <ul class="header-nav header-nav-profile">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                                <img src="admin/assets/img/avatar1.jpg?1403934956" alt="" />
                                <span class="profile-info">
                                    Efrain Colmenares
                                    <small>Administrator</small>
                                </span>
                            </a>
                            <ul class="dropdown-menu animation-dock">
                                <li class="dropdown-header">Config</li>
                                <li><a href="#">Mi cuenta</a></li>
                                <li><a href="#">My blog <span class="badge style-danger pull-right">16</span></a></li>
                                <li><a href="#">My appointments</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
                                <li><a href="#"><i class="fa fa-fw fa-power-off text-danger"></i> Cerrar sesi��n</a></li>
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul><!--end .header-nav-profile -->
                </div><!--end #header-navbar-collapse -->
            </div>
        </header>
        <!-- END HEADER-->

        <!-- BEGIN BASE-->
        <div id="base">
            <!-- BEGIN OFFCANVAS LEFT -->
            <div class="offcanvas">
            </div><!--end .offcanvas-->
            <!-- END OFFCANVAS LEFT -->
            <!-- BEGIN CONTENT-->
            <div id="content">
                <section>
                    <div class="section-body">
                        <!--                        <div class="row">
<div class="col-md-4 "><button type="button" class="btn btn-block ink-reaction btn-flat btn-success">Success</button></div>
</div>-->
                        <div class="row">
                            <!-- BEGIN SITE ACTIVITY -->
                            <div class="col-md-2" ng-hide="bMostrarBuscador" ng-controller="BarraBuscadorController" ng-hide="bMostrarBuscador==false">
                                <!--<div class="input-group">
                                    <input type="text" class="form-control" ng-model="sValorBusqueda" ng-change="rutaBuscar();" placeholder="Buscar por...">
                                </div>-->
                            </div>
                            <div class="col-md-1 col-md-offset-9" ng-hide="bMostrarBuscador">
                                <div class="input-group">
                                    <button type="button" class="btn btn-success" ui-sref="articulos-agregar" ng-click="cambiarMostrarSeccionSecundariaAgregarArticulo(0);">Agregar</button>
                                </div>
                            </div>
                        </div><!--end .row -->

                        <div class="card" >
                            <div ui-view></div>
                        </div>
                        <!-- /.col-lg-6 -->
                        <!-- END SITE ACTIVITY -->
                    </div><!--end .section-body -->
                </section>
            </div><!--end #content-->
            <!-- END CONTENT -->
            <!-- BEGIN MENUBAR-->
            <div id="menubar" class="menubar-inverse ">
                <div class="menubar-fixed-panel">
                    <div>
                        <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="expanded">
                        <a href="javascript:void(0);" ng-click="reinicializarVariables();">
                            <span class="text-lg text-bold text-primary ">Proyecto&nbsp;Catalogo</span>
                        </a>
                    </div>
                </div>
                <div class="menubar-scroll-panel">
                    <!-- Notification will automatically disappear after 10 seconds -->
                    <!-- BEGIN MAIN MENU -->
                    <ul id="main-menu" class="gui-controls" >

                        <!-- BEGIN DASHBOARD -->
                        <li>
                            <a ui-sref="index" class="active" ng-click="reinicializarVariables();">
                                <div class="gui-icon" ><i class="md md-home"></i></div>
                                <span class="title" ><p>Panel de Control</p></span>
                            </a>
                        </li><!--end /menu-li -->
                        <!-- END DASHBOARD -->

                        <!-- BEGIN EMAIL -->
                        <li>
                            <a ui-sref="articulos" ng-click="reinicializarVariables();">
                                <div class="gui-icon" ><i class="md md-web"></i></div>
                                <span class="title" ><p>Articulos</p></span>
                            </a>
                        </li>
                        <!--<li>
                            <a ui-sref="categorias" ng-click="reinicializarVariables();">
                                <div class="gui-icon" ><i class="md md-web"></i></div>
                                <span class="title" ><p>Categorias</p></span>
                            </a>
                        </li>-->
                        <!--end /menu-li -->
                        <!-- END EMAIL -->
                    </ul><!--end .main-menu -->
                    <!-- END MAIN MENU -->

                    <div class="menubar-foot-panel">
                        <small class="no-linebreak hidden-folded">
                            <span class="opacity-75">Copyright &copy; 2015</span> <strong>.:Efrain Colmenares:.</strong>
                        </small>
                    </div>
                </div><!--end .menubar-scroll-panel-->
            </div><!--end #menubar-->
            <!-- END MENUBAR -->
        </div><!--end #base-->
        <!-- END BASE -->

        <!-- BEGIN JAVASCRIPT -->
        <!--        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>-->


        <script src="libs/mass-autocomplete-master/massautocomplete.min.js"></script>
        <script src="admin/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="admin/assets/js/libs/bootstrap/bootstrap.min.js"></script>
        <script src="admin/assets/js/libs/spin.js/spin.min.js"></script>
        <script src="admin/assets/js/libs/autosize/jquery.autosize.min.js"></script>
        <script src="admin/assets/js/libs/moment/moment.min.js"></script>
        <script src="admin/assets/js/libs/flot/jquery.flot.min.js"></script>
        <script src="admin/assets/js/libs/flot/jquery.flot.time.min.js"></script>
        <script src="admin/assets/js/libs/flot/jquery.flot.resize.min.js"></script>
        <script src="admin/assets/js/libs/flot/jquery.flot.orderBars.js"></script>
        <script src="admin/assets/js/libs/flot/jquery.flot.pie.js"></script>
        <script src="admin/assets/js/libs/flot/curvedLines.js"></script>
        <script src="admin/assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="admin/assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
        <script src="admin/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        <script src="admin/assets/js/libs/d3/d3.min.js"></script>
        <script src="admin/assets/js/libs/d3/d3.v3.js"></script>
        <script src="admin/assets/js/libs/rickshaw/rickshaw.min.js"></script>
        <script src="admin/assets/js/core/source/App.js"></script>
        <script src="admin/assets/js/core/source/AppNavigation.js"></script>
        <script src="admin/assets/js/core/source/AppOffcanvas.js"></script>
        <script src="admin/assets/js/core/source/AppCard.js"></script>
        <script src="admin/assets/js/core/source/AppForm.js"></script>
        <script src="admin/assets/js/core/source/AppNavSearch.js"></script>
        <script src="admin/assets/js/core/source/AppVendor.js"></script>
        <script src="admin/assets/js/core/demo/Demo.js"></script>
        <!-- END JAVASCRIPT -->
    </body>
</html>
