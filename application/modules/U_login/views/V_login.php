<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="tutorial.html">Home</a></li>
                    <li><a href="tutorial-kategori.html">Pelayanan</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>BALAI DIKLAT</h1>
            </div>
        </div>
    </div>
</section>
<!-- Batas breadcumb -->
<!-- Bagian login  -->
<section class="page-header" style="margin-top: -35px;border-top: 0px;border-bottom: 0px; margin-bottom: 100px; background: #425A7E;height: 120px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3" style="margin-left: -20px;margin-top: 20px; width: 300px">
                <?php if($this->session->flashdata('u_pesan')!=''){ ?>
                    <div class="alert alert-danger">
                        <strong><i class="fa fa-warning"></i></strong> <?=$this->session->flashdata('u_pesan');?>
                    </div>
                <?php } ?>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6" style="border-color: #000; ">
                <div class="box-content">
                    <form action="<?=base_url('U_login/login')?>" id="frmSignIn" method="post">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label style="color: #000"><b>E-Mail</b></label>
                                    <div class="input-group mb-md">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="Email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <span class="remember-box checkbox">
                                        <label for="rememberme">
                                            <input type="checkbox" id="rememberme" name="rememberme"><b style="color: #000">Remember Me</b>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-md-5">
                                    <a class="pull-right" href="#">(Lupa Password?)</a>
                                    <label style="color: #000"><b>Password</b></label>
                                    <div class="input-group mb-md">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input type="password" name="pass" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-2" style="margin-top: 27px">
                                   <input style="background-color: #959BB1; border-color: #959BB1" type="submit" value="Masuk" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Bagtas Login-->
<!-- Bagian Isi -->
<div style="background-image: url(<?=base_url()?>assets/img/b.jpeg);height: 800px; margin-top: -70px;margin-bottom: -130px">
    <div class="container">
        <div class="row" style="border-top-color:#E95314;">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="featured-box featured-box-primary align-left mt-xlg" >
                    <div class="box-content">
                        <h3 class="heading-primary text-uppercase mb-md">Daftar Sebagai User</h3>
                        <form action="<?=base_url('U_login/insert_data_pendaftaran')?>" method="post">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Nama</label>
                                        <div class="input-group mb-md">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?=$this->session->flashdata('d_pesan_n');?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>E-Mail</label>
                                        <div class="input-group mb-md">
                                            <span class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            <input type="email" name="email" class="form-control" placeholder="Email" value="<?=$this->session->flashdata('d_pesan_e');?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Password</label>
                                        <div class="input-group mb-md">
                                            <span class="input-group-addon">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <input type="password" minlength="6" maxlength="32" name="pass" class="form-control" value="<?=$this->session->flashdata('d_pesan_p');?>" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Konfirmasi Password</label>
                                    <div class="input-group mb-md">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input type="password" minlength="6" maxlength="32" name="kon_pass" class="form-control" required placeholder="Konfirmasi Password">
                                    </div>
                                </div>
                            </div>
                            
                            <?php if($this->session->flashdata('d_pesan')!=''){ ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                        <strong><i class="fa fa-warning"></i></strong> <?=$this->session->flashdata('d_pesan');?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
                            <div class="row" style="margin-top: 10px">
                                <div class="col-md-12">
                                   <input type="submit" value="Daftar" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>