<!DOCTYPE html>
<html>
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <?php if(isset($berita['judul_berita'])){?>
            <title><?=ucfirst($berita['judul_berita'])?> - 1menit.id</title> 
            <meta name="keywords" content="1 Menit Indonesia" />
            <meta name="description" content="1 Menit Indonesia">
            <meta name="author" content="muhjuandab">
        <?php }else{?>
            <title>1menit.id - Dari dan untuk Indonesia</title> 
            <meta name="keywords" content="1 Menit Indonesia" />
            <meta name="description" content="1 Menit Indonesia">
            <meta name="author" content="muhjuandab">
        <?php } ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/magnific-popup/magnific-popup.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/semantic-ui/sidebar/sidebar.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/semantic-ui/semantic.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/theme.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/theme-elements.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/theme-blog.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/theme-shop.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/theme-animate.css">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/layers.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/navigation.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/circle-flip-slideshow/css/component.css">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/skins/default.css">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">

        <!-- Head Libs -->
        <script src="<?=base_url()?>assets/vendor/modernizr/modernizr.min.js"></script>

    </head>
    <body>
        <div class="ui sidebar inverted vertical menu">
            <center><img alt="1menit.id" class=" item img-responsive" src="<?=base_url()?>assets/img/logo-footer.png"></center>
            <a href="<?=base_url()?>" class="item active"><i class="fa fa-home"></i> Halaman Depan</a>
            <a href="#" class="item"><i class="fa fa-compass"></i> Jelajah</a>
            <a href="#" class="item"><i class="fa fa-tags"></i> Kategori</a>
        </div>
  <div class="pusher">
    <!-- Site content !-->
  
        <div class="body">
            <header id="header" class="header-narrow" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": false, "stickyEnableOnMobile": true, "stickyStartAt": 0, "stickySetTop": "0"}'>
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column header-column-center">
                                <div class="header-logo">
                                <button class="btn btn-primary" onclick="menu()">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                    <a href="<?=base_url()?>">
                                        <img alt="1menit.id" width="82" height="40" src="<?=base_url()?>assets/img/logo.png" style="width:initial;">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </header>