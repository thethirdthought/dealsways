<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/ico/favicon.png">
        <title>Dealsways | <?php echo $page_title; ?></title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>jQuery-Wizard-Plugin-master/dist/jquery.wizard.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap-multi-step-registration/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap-multi-step-registration/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap-multi-step-registration/assets/css/style.css">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/custom_style.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/icomoon.css" rel="stylesheet">
        <!-- styles needed for carousel slider -->
        <link href="<?php echo base_url() ?>assets/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/owl.theme.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>plugins/select2/select2.min.css" rel="stylesheet">

        <!-- Just for debugging purposes. -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url() ?>assets/js/jquery/1.10.1/jquery-1.10.1.min.js"></script>
        <script src="<?php echo base_url() ?>jQuery-Wizard-Plugin-master/dist/jquery.wizard.js"></script>
        <script src="<?php echo base_url() ?>plugins/select2/select2.full.min.js"></script>
        <!-- include pace script for automatic web page progress bar  -->

        <script>
            paceOptions = {
                elements: true
            };
        </script>
        <script src="<?php echo base_url() ?>assets/js/pace.min.js"></script>


    </head>

    <body>

        <div id="wrapper">

            <div class="header">
                <nav class="navbar navbar-site navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span></button>
                            <a href="<?php echo base_url()?>" class="logo logo-title">
                                <img src="<?php echo base_url()."images/logo.png"?>"></a></div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <?php if($session_data['int_user_id']){?>
                                <li><a href="<?php echo site_url() . "/user/logout" ?>">Signout <i class="glyphicon glyphicon-off"></i> </a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span>User</span> <i class="icon-user fa"></i> <i
                                            class=" icon-down-open-big fa"></i></a>
                                    <ul class="dropdown-menu user-menu">
                                        <li class="active"><a href="account-home.html"><i class="icon-home"></i> Personal Home
                                            </a></li>

                                        <li><a href="account-myads.html"><i class="icon-th-thumb"></i> My ads </a></li>
                                        <li><a href="account-favourite-ads.html"><i class="icon-heart"></i> Favourite ads </a>
                                        </li>
                                        <li><a href="account-saved-search.html"><i class="icon-star-circled"></i> Saved search
                                            </a></li>
                                        <li><a href="account-archived-ads.html"><i class="icon-folder-close"></i> Archived ads
                                            </a></li>
                                        <li><a href="account-pending-approval-ads.html"><i class="icon-hourglass"></i> Pending
                                                approval </a></li>
                                        <li><a href="statements.html"><i class=" icon-money "></i> Payment history </a></li>
                                    </ul>
                                </li>
                                <?php }?>
                                <li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger"
                                                       href="post-ads.html">Post Free Add</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
            <!-- /.header -->
