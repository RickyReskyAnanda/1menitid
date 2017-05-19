<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2015 00:53:03 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="<?=base_url()?>admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>admin/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>admin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h2>1menit.id - Login Form</h2>
            <p>Silahkan Login</p>
            <form class="m-t" role="form" action="<?=base_url('1menitadmin/proses')?>" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="eml" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>Portal Berita 1menit.id &copy; 2017</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?=base_url()?>admin/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>admin/js/bootstrap.min.js"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2015 00:53:03 GMT -->
</html>
