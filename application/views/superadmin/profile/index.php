<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/images/icon.jpg">
    <title>User Profile | Super Admin | IT IJSM</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="<?= base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <i class="fa fa-share-alt-square" style="margin-left: 2%; font-size: 45px; color: blue"> IT IJSM</i>
            <!-- start: search & user box -->
            <div class="header-right" style="padding-right: 2%;">

                <span class="separator"></span>

                <div id="userbox" class="userbox" style="margin-right: -2%;">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="<?= base_url('assets/images/') . $user['image']; ?>" class="img-circle" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name"><?= $user['name'] ?></span>
                            <span class="role">administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="<?= site_url('superadmin/profile'); ?>"><i class="fa fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-power-off"></i> logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        <span style="color: white">Navigation</span>
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="<?= base_url('superadmin'); ?>">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('masterbarang/index'); ?>">
                                        <i class="fa fa-cube" aria-hidden="true"></i>
                                        <span>Master Barang</span>
                                    </a>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-cubes" aria-hidden="true"></i>
                                        <span>Stock</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="<?php echo base_url() . '/StockInController' ?>">
                                                Stock In
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<php echo base_url().'/StockOutController' ?>">
                                                Stock Out
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                        <div class="sidebar-header">
                            <div class="sidebar-title">
                                <span style="color: white">User</span>
                            </div>
                        </div>
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-child" aria-hidden="true"></i>
                                        <span>Managament User</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
        </div>

        </div>

        </aside>
        <!-- end: sidebar -->

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>User Profile</h2>
                <div class="right-wrapper pull-right" style="padding-right: 3%;">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="<?php echo site_url() . '/DashboardController' ?>">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Profile</span></li>
                    </ol>
                </div>
            </header>

            <!-- start: page -->

            <!-- end: page -->
        </section>
        </div>

    </section>

    <!-- Vendor -->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="<?= base_url(); ?>assets/vendor/jquery-autosize/jquery.autosize.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?= base_url(); ?>assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?= base_url(); ?>assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?= base_url(); ?>assets/javascripts/theme.init.js"></script>

</body>

</html>