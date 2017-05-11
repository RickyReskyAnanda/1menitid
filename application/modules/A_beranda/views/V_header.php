<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_3.0/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2017 11:06:41 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>Velonic - Responsive Admin Dashboard Template</title>

        <!-- Google-Fonts -->
        <link href='../../../fonts.googleapis.com/css9c92.css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>

        <!-- Bootstrap core CSS -->
        <link href="<?=base_url()?>admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url()?>admin/css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="<?=base_url()?>admin/css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="<?=base_url()?>admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?=base_url()?>admin/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?=base_url()?>admin/assets/morris/morris.css">

        <!-- sweet alerts -->
        <link href="<?=base_url()?>admin/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?=base_url()?>admin/css/style.css" rel="stylesheet">
        <link href="<?=base_url()?>admin/css/helper.css" rel="stylesheet">
        <link href="<?=base_url()?>admin/css/style-responsive.css" rel="stylesheet" />
        

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
  <script src="<?=base_url()?>admin/js/html5shiv.js"></script>
  <script src="<?=base_url()?>admin/js/respond.min.js"></script>
<![endif]-->

<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62751496-1', 'auto');
  ga('send', 'pageview');

</script> -->
        <script src="<?=base_url()?>admin/js/jquery.js"></script>

    </head>


    <body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="<?=base_url('administrator')?>" class="logo-expanded">
                    <!-- <img src="img/single-logo.png" alt="logo"> -->
                    <span class="nav-label">PG - Admin</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="<?=base_url('administrator')?>">
                            <i class="ion-home"></i> <span class="nav-label">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('administrator/pengajuan-tempat')?>">
                            <i class="ion-log-in"></i><span class="nav-label">Pengajuan Tempat <span class="badge bg-primary">15</span></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('administrator/proses-tempat')?>">
                            <i class="ion-clock"></i><span class="nav-label">Tempat Diproses <span class="badge bg-warning">15</span></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('administrator/tempat-diizinkan')?>">
                            <i class="ion-home"></i><span class="nav-label">Tempat Diizinkan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('administrator/tempat-ditolak')?>">
                            <i class="ion-stop"></i><span class="nav-label">Tempat Ditolak <span class="badge bg-danger">15</span></span>
                        </a>
                    </li>
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                    <!-- mesages -->  
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o "></i>
                            <span class="badge badge-sm up bg-purple count">4</span>
                        </a>
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                            <li>
                                <p>Messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="img/avatar-2.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="img/avatar-3.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="img/avatar-4.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <p><a href="<?=base_url('administrator/pengajuan-tempat')?>" class="text-right">Lihat Semua</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /messages -->
                    <!-- Notification -->
                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                            <span class="username">John Deo </span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            <li><a href="#"><i class="fa fa-cog"></i> Pengaturan</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Keluar</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
                </ul>
                <!-- End right navbar -->

            </header>
            <!-- Header Ends -->
