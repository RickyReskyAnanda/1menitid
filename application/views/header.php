<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exomatik| Dashboard </title>

    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>
</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle img-responsive" style="width: 150px;" src="<?=base_url().'image/gambar_anggota/'.$this->session->userdata('foto');?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?=$this->session->userdata('nama');?></strong>
                             </span> <span class="text-muted text-xs block"><?=ucfirst($this->session->userdata('role'))?> </span> </a>
                        
                    </div>
                    <div class="logo-element">
                        EXO
                    </div>
                </li>
                <?php $aktif=$this->uri->segment(2);?>
                <li class="<?php if($aktif=='dashboard')echo 'active';?>">
                    <a href="<?=base_url('admin')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Beranda</span></a>
                </li>
                <li class="<?php if($aktif=='pendaftaran')echo 'active';?>">
                    <a href="<?=base_url('admin/pendaftaran')?>"><i class="fa fa-users"></i> <span class="nav-label">Pendaftaran</span>  </a>
                </li>
                <li class="<?php if($aktif=='konten')echo 'active';?>">
                    <a href="<?=base_url('admin/konten')?>"><i class="fa fa-diamond"></i> <span class="nav-label">Konten</span></a>
                </li>
                <li class="<?php if($aktif=='tutorial')echo 'active';?>">
                    <a href="<?=base_url('admin/tutorial')?>"><i class="fa fa-diamond"></i> <span class="nav-label">Tutorial</span></a>
                </li>
                <li class="<?php if($aktif=='proker')echo 'active';?>">
                    <a href="<?=base_url('admin/proker')?>"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Program Kerja</span></a>
                </li>
                <li class="<?php if($aktif=='portofolio')echo 'active';?>">
                    <a href="<?=base_url('admin/portofolio')?>"><i class="fa fa-envelope"></i> <span class="nav-label">Portofolio </span></a>
                </li>
                <li class="<?php if($aktif=='anggota')echo 'active';?>">
                    <a href="<?=base_url('admin/anggota')?>"><i class="fa fa-pie-chart"></i> <span class="nav-label">Anggota</span>  </a>
                </li>
                <li class="<?php if($aktif=='struktur')echo 'active';?>">
                    <a href="<?=base_url('admin/struktur')?>"><i class="fa fa-flask"></i> <span class="nav-label">Struktur Organisasi</span></a>
                </li>
                <li class="<?php if($aktif=='download')echo 'active';?>">
                    <a href="<?=base_url('admin/download')?>"><i class="fa fa-flask"></i> <span class="nav-label">Download</span></a>
                </li>
                <li class="<?php if($aktif=='donatur')echo 'active';?>">
                    <a href="<?=base_url('admin/donatur')?>"><i class="fa fa-flask"></i> <span class="nav-label">Donatur</span></a>
                </li>
                <li class="<?php if($aktif=='setting')echo 'active';?>">
                    <a href="<?=base_url('admin/setting')?>"><i class="fa fa-pie-chart"></i> <span class="nav-label">Setting Web</span>  </a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.3/search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">EXOMATIK Study Club</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?=base_url()?>assets/img/a7.jpg">
                                </a>
                                <div>
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?=base_url()?>assets/img/a4.jpg">
                                </a>
                                <div>
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?=base_url()?>assets/img/profile.jpg">
                                </a>
                                <div>
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?=base_url('A_login/keluar')?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>