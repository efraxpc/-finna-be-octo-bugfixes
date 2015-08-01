<!DOCTYPE html>
<html lang="en">
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
        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script type="text/javascript" src="admin/assets/js/libs/utils/html5shiv.js?1403934957"></script>
<script type="text/javascript" src="admin/assets/js/libs/utils/respond.min.js?1403934956"></script>
<![endif]-->
    </head>
    <body class="menubar-hoverable header-fixed ">
        <!-- BEGIN HEADER-->
        <header id="header" >
            <div class="headerbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="headerbar-left">
                    <ul class="header-nav header-nav-options">
                        <li class="header-nav-brand" >
                            <div class="brand-holder">
                                <a href="../../html/dashboards/dashboard.html">
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
                    <ul class="header-nav header-nav-options">
                        <li>
                            <!-- Search form -->
                            <form class="navbar-search" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
                                </div>
                                <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                            </form>
                        </li>


                    </ul><!--end .header-nav-options -->
                    <ul class="header-nav header-nav-profile">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                                <img src="admin/assets/img/avatar1.jpg?1403934956" alt="" />
                                <span class="profile-info">
                                    Daniel Johnson
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
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card-head">
                                                <header>Site activity</header>
                                            </div><!--end .card-head -->
                                            <div class="card-body height-8">
                                                <div id="flot-visitors-legend" class="flot-legend-horizontal stick-top-right no-y-padding"></div>
                                                <div id="flot-visitors" class="flot height-7" data-title="Activity entry" data-color="#7dd8d2,#0aa89e"></div>
                                            </div><!--end .card-body -->
                                        </div><!--end .col -->
                                        <div class="col-md-4">
                                            <div class="card-head">
                                                <header>Today's stats</header>
                                            </div>
                                            <div class="card-body height-8">
                                                <strong>214</strong> members
                                                <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                                <div class="progress progress-hairline">
                                                    <div class="progress-bar progress-bar-primary-dark" style="width:43%"></div>
                                                </div>
                                                756 pageviews
                                                <span class="pull-right text-success text-sm">0,68% <i class="md md-trending-up"></i></span>
                                                <div class="progress progress-hairline">
                                                    <div class="progress-bar progress-bar-primary-dark" style="width:11%"></div>
                                                </div>
                                                291 bounce rates
                                                <span class="pull-right text-danger text-sm">21,08% <i class="md md-trending-down"></i></span>
                                                <div class="progress progress-hairline">
                                                    <div class="progress-bar progress-bar-danger" style="width:93%"></div>
                                                </div>
                                                32,301 visits
                                                <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                                <div class="progress progress-hairline">
                                                    <div class="progress-bar progress-bar-primary-dark" style="width:63%"></div>
                                                </div>
                                                132 pages
                                                <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                                <div class="progress progress-hairline">
                                                    <div class="progress-bar progress-bar-primary-dark" style="width:47%"></div>
                                                </div>
                                            </div><!--end .card-body -->
                                        </div><!--end .col -->
                                    </div><!--end .row -->
                                </div><!--end .card -->
                            </div><!--end .col -->
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

                    <!-- BEGIN MAIN MENU -->
                    <ul id="main-menu" class="gui-controls">

                        <!-- BEGIN DASHBOARD -->
                        <li>
                            <a href="../../html/dashboards/dashboard.html" class="active">
                                <div class="gui-icon"><i class="md md-home"></i></div>
                                <span class="title">Panel de Control</span>
                            </a>
                        </li><!--end /menu-li -->
                        <!-- END DASHBOARD -->

                        <!-- BEGIN EMAIL -->
                        <li class="gui-folder">
                            <a>
                                <div class="gui-icon"><i class="md md-email"></i></div>
                                <span class="title">Email</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="../../html/mail/inbox.html" ><span class="title">Inbox</span></a></li>
                                <li><a href="../../html/mail/compose.html" ><span class="title">Compose</span></a></li>
                                <li><a href="../../html/mail/reply.html" ><span class="title">Reply</span></a></li>
                                <li><a href="../../html/mail/message.html" ><span class="title">View message</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <!-- END EMAIL -->
                    </ul><!--end .main-menu -->
                    <!-- END MAIN MENU -->

                    <div class="menubar-foot-panel">
                        <small class="no-linebreak hidden-folded">
                            <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                        </small>
                    </div>
                </div><!--end .menubar-scroll-panel-->
            </div><!--end #menubar-->
            <!-- END MENUBAR -->
        </div><!--end #base-->
        <!-- END BASE -->

        <!-- BEGIN JAVASCRIPT -->
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
