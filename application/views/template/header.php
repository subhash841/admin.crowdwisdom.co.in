<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title><?= $page_title ?></title>
        <!-- Favicon-->
        <link rel="icon" href="/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap Core Css -->
        <link href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="<?= base_url() ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="<?= base_url() ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Sweet Alert Css -->
        <link href="<?= base_url() ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

        <!-- JQuery DataTable Css -->
        <link href="<?= base_url() ?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Bootstrap Date time picker Css -->
        <!--<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <!-- Morris Chart Css-->
        <!--<link href="<?= base_url() ?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />-->

        <!-- Colorpicker Css -->
        <link href="<?= base_url() ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

        <!-- Dropzone Css -->
        <link href="<?= base_url() ?>assets/plugins/dropzone/dropzone.css" rel="stylesheet">

        <!-- Multi Select Css -->
        <link href="<?= base_url() ?>assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">

        <!-- Bootstrap Spinner Css -->
        <link href="<?= base_url() ?>assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

        <!-- Bootstrap Tagsinput Css -->
        <link href="<?= base_url() ?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

        <!-- Bootstrap Select Css -->
        <link href="<?= base_url() ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <!-- noUISlider Css -->
        <link href="<?= base_url() ?>assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?= base_url() ?>assets/css/themes/all-themes.css" rel="stylesheet" />

        <!-- Jquery Core Js -->
        <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/js/config.js?v=0.00"></script>
        <!-- Wysiwyg-text-editor 
        <link href="<?= base_url() ?>assets/plugins/Wysiwyg-text-editor/editor.css" rel="stylesheet" />
        <script src="<?= base_url() ?>assets/plugins/Wysiwyg-text-editor/editor.js"></script>

        -->
    </head>
    <body class="theme-red" data-base_url="<?= base_url() ?>">
        <!-- Page Loader -->
        <!--<div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>-->
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="<?= base_url() ?>/Dashboard">Crowd Wisdom</a>
                </div>
                <!--<div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         Call Search 
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                         #END# Call Search 
                         Notifications 
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">notifications</i>
                                <span class="label-count">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">NOTIFICATIONS</li>
                                <li class="body">
                                    <ul class="menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>12 new members joined</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 14 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-cyan">
                                                    <i class="material-icons">add_shopping_cart</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>4 sales made</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 22 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-red">
                                                    <i class="material-icons">delete_forever</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-orange">
                                                    <i class="material-icons">mode_edit</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy</b> changed name</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 2 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-blue-grey">
                                                    <i class="material-icons">comment</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> commented your post</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 4 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">cached</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> updated status</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-purple">
                                                    <i class="material-icons">settings</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>Settings updated</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> Yesterday
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Notifications</a>
                                </li>
                            </ul>
                        </li>
                         #END# Notifications 
                         Tasks 
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">flag</i>
                                <span class="label-count">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">TASKS</li>
                                <li class="body">
                                    <ul class="menu tasks">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Footer display issue
                                                    <small>32%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Make new buttons
                                                    <small>45%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Create new dashboard
                                                    <small>54%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Solve transition issue
                                                    <small>65%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Answer GitHub questions
                                                    <small>92%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Tasks</a>
                                </li>
                            </ul>
                        </li>
                         #END# Tasks 
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>-->
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="<?= base_url() ?>assets/images/user.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
                        <div class="email"><?php
                            $userdata = $this -> session -> userdata( 'loggedin' );
                            echo $userdata[ 'user_email' ];
                            ?></div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <!--<li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                                <li role="seperator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                                <li role="seperator" class="divider"></li>-->
                                <li><a href="<?= base_url() ?>Login/logout"><i class="material-icons">input</i>Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>

<!--                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Dashboard' )) ? "active" : "" ?>">
    <a href="<?= base_url() ?>Dashboard">
        <i class="material-icons">home</i>
        <span>Dashboard</span>
    </a>
</li>-->
                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Master' )) ? "active" : "" ?>">
                            <a href="javascript:void(0);" class="menu-toggle <?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'toggled' )) ? "active" : "" ?>">
                                <i class="material-icons">wb_cloudy</i>
                                <span>Master</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Blogs/category' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Blogs/category">Category</a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Master/topics' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Master/topics" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Master/topics' )) ? "active" : "" ?>">
                                        Topics List
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Master/states' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Master/states" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Master/states' )) ? "active" : "" ?>">
                                        States List
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Master/parties' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Master/parties" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Master/parties' )) ? "active" : "" ?>">
                                        Parties List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Stock' )) ? "active" : "" ?>" style="display:none">
                            <a href="javascript:void(0);" class="menu-toggle <?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'toggled' )) ? "active" : "" ?>">
                                <i class="material-icons">show_chart</i>
                                <span>Stocks</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Stock/stock_list' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Stock/stock_list" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Stock/stock_list' )) ? "active" : "" ?>">
                                        Stock List
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Stock/period' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Stock/period" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Stock/period' )) ? "active" : "" ?>">
                                        Stocks & Period
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Stock/define_experts' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Stock/define_experts" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Stock/define_experts' )) ? "active" : "" ?>">
                                        Define Expert
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php
                        if ( strpos( $_SERVER[ 'REQUEST_URI' ], 'Karnataka/Forecast/reasons' ) ) {
                                $isforecastpage = "active";
                        } else if ( strpos( $_SERVER[ 'REQUEST_URI' ], 'Gujrat/Forecast/reasons' ) ) {
                                $isforecastpage = "active";
                        } else if ( strpos( $_SERVER[ 'REQUEST_URI' ], 'Karnataka/Forecast/forecastlist' ) ) {
                                $isforecastpage = "active";
                        } else if ( strpos( $_SERVER[ 'REQUEST_URI' ], 'Karnataka/Forecast/forecastlist' ) ) {
                                $isforecastpage = "active";
                        } else if ( strpos( $_SERVER[ 'REQUEST_URI' ], 'Dashboard' ) ) {
                                $isforecastpage = "active";
                        } else {
                                $isforecastpage = "";
                        }
                        ?>
                        <li class="<?= $isforecastpage; ?>" style="display:none">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">&#xE913;</i>
                                <span>Elections</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Election' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Election">
                                        Add Election
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Karnataka/Forecast' )) ? "active" : "" ?>">
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        Karnataka
                                    </a>
                                    <ul class="ml-menu">
                                        <li class="">
                                            <a href="javascript:void(0);" class="">
                                                Forecast List
                                            </a>
                                        </li>
                                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Karnataka/Forecast/reasons' )) ? "active" : "" ?>">
                                            <a href="<?= base_url() ?>Karnataka/Forecast/reasons" class="">
                                                Forecast Reason
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Gujrat/Forecast' )) ? "active" : "" ?>">
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        Gujrat
                                    </a>
                                    <ul class="ml-menu">
                                        <li class="">
                                            <a href="javascript:void(0);" class="">
                                                Forecast List
                                            </a>
                                        </li>
                                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Gujrat/Forecast/reasons' )) ? "active" : "" ?>">
                                            <a href="<?= base_url() ?>Gujrat/Forecast/reasons" class="">
                                                Forecast Reason
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Dashboard' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Dashboard">
                                        Delete Forecast
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Blogs' )) ? "active" : "" ?>">
                            <a href="javascript:void(0)" class="menu-toggle">
                                <i class="material-icons">list</i>
                                <span>Your Voice</span>
                            </a>
                            <ul class="ml-menu">
                                <!--<li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Blogs/subcategory' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Blogs/subcategory">Sub Category</a>
                                </li>-->
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Blogs/index' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Blogs/index">List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Poll' )) ? "active" : "" ?>">
                            <a href="javascript:void(0);" class="menu-toggle <?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'toggled' )) ? "active" : "" ?>">
                                <i class="material-icons">multiline_chart</i>
                                <span>Predictions</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Poll/index' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Poll/index" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Poll/index' )) ? "active" : "" ?>">
                                        Create
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Poll/lists' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Poll/lists" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Poll/lists' )) ? "active" : "" ?>">
                                        List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Survey' )) ? "active" : "" ?>">
                            <a href="javascript:void(0);" class="menu-toggle <?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'toggled' )) ? "active" : "" ?>">
                                <i class="material-icons">note_add</i>
                                <span>Survey</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Survey/index' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Survey/index" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Survey/index' )) ? "active" : "" ?>">
                                        Create
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Survey/lists' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Survey/lists" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Survey/lists' )) ? "active" : "" ?>">
                                        List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'RatedArticle' )) ? "active" : "" ?>">
                            <a href="javascript:void(0);" class="menu-toggle <?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'toggled' )) ? "active" : "" ?>">
                                <i class="material-icons">message</i>
                                <span>Article</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'RatedArticle/index' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>RatedArticle/index" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'RatedArticle/index' )) ? "active" : "" ?>">
                                        Create
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'RatedArticle/lists' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>RatedArticle/lists" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'RatedArticle/lists' )) ? "active" : "" ?>">
                                        List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'FromTheWeb' )) ? "active" : "" ?>">
                            <a href="javascript:void(0);" class="menu-toggle <?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'toggled' )) ? "active" : "" ?>">
                                <i class="material-icons">message</i>
                                <span>FromTheWeb</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'FromTheWeb/index' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>FromTheWeb/index" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'FromTheWeb/index' )) ? "active" : "" ?>">
                                        Create
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'comments/lists' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>FromTheWeb/lists" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'FromTheWeb/lists' )) ? "active" : "" ?>">
                                        List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--<li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'User' )) ? "active" : "" ?>">
                            <a href="javascript:void(0);" class="menu-toggle <?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'toggled' )) ? "active" : "" ?>">
                                <i class="material-icons">people</i>
                                <span>Users</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'User/lists' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>User/lists" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'User/lists' )) ? "active" : "" ?>">
                                        Users
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Admin/lists' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Admin/lists" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Admin/lists' )) ? "active" : "" ?>">
                                        Admins
                                    </a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Packages' )) ? "active" : "" ?>">
                            <a href="javascript:void(0);" class="menu-toggle <?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'toggled' )) ? "active" : "" ?>">
                                <i class="material-icons">archive</i>
                                <span>Packages</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Packages/index' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Packages/index" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Packages/index' )) ? "active" : "" ?>">
                                        Create
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Packages/lists' )) ? "active" : "" ?>">
                                    <a href="<?= base_url() ?>Packages/lists" class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Packages/lists' )) ? "active" : "" ?>">
                                        List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Wall' )) ? "active" : "" ?>">
                            <a href="javascript:void(0);" class="menu-toggle  <?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'toggled' )) ? "active" : "" ?>">
                                <i class="material-icons">note_add</i>
                                <span>Wall</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Wall/index' )) ? "active" : "" ?>">
                                   <a href="<?= base_url() ?>Wall/index">
                                        Create
                                    </a>
                                </li>
                                <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'Wall/lists' )) ? "active" : "" ?>">
                                   <a href="<?= base_url() ?>Wall/lists" >
                                        List 
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="<?php echo (strpos( $_SERVER[ 'REQUEST_URI' ], 'BannedWords' )) ? "active" : "" ?>">
                            <a href="<?= base_url() ?>BannedWords">
                                <i class="material-icons">volume_off</i>
                                <span>Banned Words</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2017 - 2018 <a href="javascript:void(0);">Crowd Wisdom</a>.
                    </div>
                    <!--<div class="version">
                        <b>Version: </b> 1.0.5
                    </div>-->
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>
        <div id="response_message" style="position: fixed;bottom: 30px;right: 25px;z-index: 9999;padding: 10px;border-radius: 3px;"></div>