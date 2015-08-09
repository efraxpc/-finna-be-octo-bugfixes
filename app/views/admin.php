<!DOCTYPE html>
<html lang="en" data-ng-app = 'appAdmin' ng-controller="CrudController">
    <head>
        <title>.::Admin::.</title>
        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <!-- END META -->

        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/bootstrap.css?1422792965" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/materialadmin.css?1425466319" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/font-awesome.min.css?1422529194" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/theme-default/libs/morris/morris.core.css?1420463396" />
        <link type="text/css" rel="stylesheet" href="libs/mass-autocomplete-master/massautocomplete.theme.css" />
        <script src="https:ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
        <script src="https:ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-sanitize.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular-animate.min.js"></script>
        <script src="libs/angular-growl-notifications/angular-growl-notifications.min.js"></script>
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
            [mass-autocomplete] {
                position: relative;
            }

            .ac-container {
                position: absolute;
                top: 100% !important;
                left: 0 !important;
                width: 100% !important;
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
    <body class="menubar-hoverable header-fixed " >
        <growl-notifications></growl-notifications>

        <!-- BEGIN HEADER-->
        <header id="header" >
            <div class="headerbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="headerbar-left">
                    <ul class="header-nav header-nav-options">
                        <li class="header-nav-brand" >
                            <div class="brand-holder">
                                <a ng-href="#inicio">
                                    <span class="text-lg text-bold text-primary" >Proyecto Catalogo</span>
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
                                    John vivas
                                    <small>Administrator</small>
                                </span>
                            </a>
                            <ul class="dropdown-menu animation-dock">
                                <li class="dropdown-header">Config</li>
                                <li><a href="../../html/pages/profile.html">My profile</a></li>
                                <li><a href="../../html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
                                <li><a href="../../html/pages/calendar.html">My appointments</a></li>
                                <li class="divider"></li>
                                <li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
                                <li><a href="../../html/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
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
                        <div class="row">
                            <!-- BEGIN SITE ACTIVITY -->
                            <div class="col-lg-6" ng-if="bMostrarBuscador==true" ng-controller="BarraBuscadorController">
                                <div class="input-group" >
                                    <input type="text" class="form-control" ng-model="sValorBusqueda" ng-change="rutaBuscar();" placeholder="Buscar por...">
                                </div>
                            </div>
                            <!-- /.col-lg-6 -->    
                            <!--                            <div ng-view></div>-->
                            <div ui-view></div>
                            <growl-notification ng-if="showGrowl">
                                Both fade in and out are animated
                            </growl-notification>
                            <!-- END SITE ACTIVITY -->
                        </div><!--end .row -->
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
                        <a href="../../html/dashboards/dashboard.html">
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
                            <a ui-sref="index" class="active" ng-click="ocultarBuscador();">
                                <div class="gui-icon"><i class="md md-home" ng-click="ocultarBuscador();"></i></div>
                                <span class="title" ng-click="ocultarBuscador();"><p>Panel de Control</p></span>
                            </a>
                        </li><!--end /menu-li -->
                        <!-- END DASHBOARD -->

                        <!-- BEGIN EMAIL -->
                        <li>
                            <a ui-sref="articulos" ng-click="mostrarBuscador();">
                                <div class="gui-icon"><i class="md md-web" ng-click="mostrarBuscador();"></i></div>
                                <span class="title" ng-click="mostrarBuscador();"><p>Articulo</p></span>
                            </a>
                        </li>
                        <!--end /menu-li -->
                        <!-- END EMAIL -->
                    </ul><!--end .main-menu -->
                    <!-- END MAIN MENU -->

                    <div class="menubar-foot-panel">
                        <small class="no-linebreak hidden-folded">
                            <span class="opacity-75">Copyright &copy; 2015</span> <strong>Rose Consultores</strong>
                        </small>
                    </div>
                </div><!--end .menubar-scroll-panel-->
            </div><!--end #menubar-->
            <!-- END MENUBAR -->
        </div><!--end #base-->
        <!-- END BASE -->

        <!-- BEGIN JAVASCRIPT -->
        <!--        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>-->

        <script src="admin/assets/js/angular/appAdmin.js"></script>
        <script src="libs/mass-autocomplete-master/massautocomplete.min.js"></script>
        <script src="admin/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
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
        <script src="admin/assets/js/core/demo/DemoDashboard.js"></script>
        <!-- END JAVASCRIPT -->
    </body>
</html>
