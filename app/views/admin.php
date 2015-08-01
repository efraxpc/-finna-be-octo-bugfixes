<!DOCTYPE html>
<html lang="en" data-ng-app="app">
    <head>
        <meta charset="utf-8" />
        <title>.::Admin::.</title>
        <meta name="description" content="Angularjs, Html5, Music, Landing, 4 in 1 ui kits package" />
        <meta name="keywords" content="AngularJS, angular, bootstrap, admin, dashboard, panel, app, charts, components,flat, responsive, layout, kit, ui, route, web, app, widgets" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="bower_components/animate.css/animate.css" type="text/css" />
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="bower_components/simple-line-icons/css/simple-line-icons.css" type="text/css" />
        <link rel="stylesheet" href="css/font.css" type="text/css" />
        <link rel="stylesheet" href="css/app.css" type="text/css" />
    </head>
    <body ng-controller="AppCtrl">
        <div class="app" id="app" ng-class="{'app-header-fixed':app.settings.headerFixed, 'app-aside-fixed':app.settings.asideFixed, 'app-aside-folded':app.settings.asideFolded, 'app-aside-dock':app.settings.asideDock, 'container':app.settings.container}" ui-view></div>


        <!-- jQuery -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Angular -->
        <script src="bower_components/angular/angular.js"></script>

        <script src="bower_components/angular-animate/angular-animate.js"></script>
        <script src="bower_components/angular-cookies/angular-cookies.js"></script>
        <script src="bower_components/angular-resource/angular-resource.js"></script>
        <script src="bower_components/angular-sanitize/angular-sanitize.js"></script>
        <script src="bower_components/angular-touch/angular-touch.js"></script>

        <script src="bower_components/angular-ui-router/release/angular-ui-router.js"></script> 
        <script src="bower_components/ngstorage/ngStorage.js"></script>
        <script src="bower_components/angular-ui-utils/ui-utils.js"></script>

        <!-- bootstrap -->
        <script src="bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
        <!-- lazyload -->
        <script src="bower_components/oclazyload/dist/ocLazyLoad.js"></script>
        <!-- translate -->
        <script src="bower_components/angular-translate/angular-translate.js"></script>
        <script src="bower_components/angular-translate-loader-static-files/angular-translate-loader-static-files.js"></script>
        <script src="bower_components/angular-translate-storage-cookie/angular-translate-storage-cookie.js"></script>
        <script src="bower_components/angular-translate-storage-local/angular-translate-storage-local.js"></script>

        <!-- App -->
        <script src="admin/js/app.js"></script>
        <script src="admin/js/config.js"></script>
        <script src="admin/js/config.lazyload.js"></script>
        <script src="admin/js/config.router.js"></script>
        <script src="admin/js/main.js"></script>
        <script src="admin/js/services/ui-load.js"></script>
        <script src="admin/js/filters/fromNow.js"></script>
        <script src="admin/js/directives/setnganimate.js"></script>
        <script src="admin/js/directives/ui-butterbar.js"></script>
        <script src="admin/js/directives/ui-focus.js"></script>
        <script src="admin/js/directives/ui-fullscreen.js"></script>
        <script src="admin/js/directives/ui-jq.js"></script>
        <script src="admin/js/directives/ui-module.js"></script>
        <script src="admin/js/directives/ui-nav.js"></script>
        <script src="admin/js/directives/ui-scroll.js"></script>
        <script src="admin/js/directives/ui-shift.js"></script>
        <script src="admin/js/directives/ui-toggleclass.js"></script>
        <script src="admin/js/controllers/bootstrap.js"></script>
        <!-- Lazy loading -->
    </body>
</html>
