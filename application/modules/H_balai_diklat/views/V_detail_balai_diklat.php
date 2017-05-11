<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="tutorial.html">Home</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Detail Tempat</h1>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-bottom: 20px; margin-top: 100px">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        <h3><?=$detail['nama_tempat']?> <span class="label label-dark">New</span></h3>
                        <hr class="dashed tall">
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default" style="margin-top: 15px;">
                         <div class="panel-body">
                            <h4><?="Rp. ".number_format($detail['harga'],2,',','.');?>/<?=$detail['pembayaran']?> </h4>
                            Perubahan Harga Terakhir: 13-01-2017, 11:20 WIB
                         </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10}'>
                            <?php for ($i=0; $i < count($detail['gambar']); $i++) { ?>
                            <div>
                                <img alt="" height="300" class="img-responsive" src="<?=base_url()?>assets/images/tempat/<?=$detail['gambar'][$i]['nama_gambar']?>">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="summary entry-summary shop">
                            <h4 class="mb-none"><strong></strong></h4>
                            <div class="review_num">
                                <span class="count" itemprop="ratingCount">2</span> reviews
                            </div>
                            <div title="Rated 5.00 out of 5" class="star-rating">
                                <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                            </div>
                            <p class="price">
                                <span class="amount"><?="Rp. ".number_format($detail['harga'],2,',','.');?>/<?=$detail['pembayaran']?></span>
                            </p>
                            <h4>With Borders</h4>
                            <ul class="list list-icons list-primary list-side-borders mt-xlg">
                                <li><i class="fa fa-check"></i> <?=$detail['luas']?> (Meter Persegi)</li>
                                <li><i class="fa fa-check"></i> <?=$detail['jam_buka'].'-'.$detail['jam_tutup']?>  </li>
                                <li><i class="fa fa-check"></i> <?=$detail['lokasi']?></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-warning" data-toggle="modal" data-backdrop="static" data-target="#formModal" data-keyboard="false">
                                    <i class="fa fa-calendar-plus-o"></i> Pesan</button>
                                </button>
                                <!-- <a href="<?=base_url('balai-diklat/aaaaa/6/pemesanan')?>"><button class=" col-md-12 btn btn-warning"><i class="fa fa-calendar-plus-o"></i> Pesan</button></a> -->
                            </div>
                        </div>
                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="formModalLabel">Pemesanan</h4>
                                    </div>
                                    <div class="modal-body">
                                            <label> Cek Tanggal</label>
                                        <div class="form-group">
                                            <div class="col-md-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                    <input type="text" data-plugin-datepicker data-plugin-options='{ "multidate": true }' class="form-control" id="cekTanggal">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-primary" onclick="cek_tanggal()"><i class="fa fa-search"></i> Cari</button>
                                            </div>
                                        </div>
                                        <div class="form-group" id="konfirmasi-tanggal">
                                            <div class="col-sm-12">
                                                <div class="alert alert-danger alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <strong><i class="fa fa-warning"></i>Tidak tersedia!</strong> Pada tanggal : 
                                                    <ul id="tanggaltidaktersedia">
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="tanggal-tersedia">
                                            <div class="col-sm-12">
                                                <div class="alert alert-success alert-dismissible" role="alert">
                                                    <strong><i class="fa fa-warning"></i> Tanggal Tersedia !</strong> 
                                                    <p>Total Harga :</p> 
                                                    <ul>
                                                        <li id="pembayaranperhari"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group" id="form-akses">
                                            <div class="col-md-12">
                                                <label><i class="fa fa-bookmark"></i> Nama Kegiatan</label>
                                                <input type="text" name="name" class="form-control" placeholder="Type your name..." id="fnamaKegiatan" required/>
                                            </div>
                                        </div>
                                        <div class="form-group" id="form-akses2">
                                            <div class="col-md-12">
                                                <label><i class="fa fa-building"></i> Perusahaan / Organisasi</label>
                                                <input type="text" name="name" class="form-control" placeholder="Masukkan nama Perusahaan/Organisasi" id="forganisasi" required/>
                                            </div>
                                        </div>
                                        <div class="form-group" id="form-akses3">
                                            <div class="col-md-12">
                                                <label><i class="fa fa-list-ul"></i> Kebutuhan</label>
                                                <textarea class="form-control" id="fkebutuhan"></textarea>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group" id="form-akses4">
                                            <div class="col-md-12">
                                                <label><i class="fa fa-align-right"></i> Keterangan</label>
                                                <textarea class="form-control" id="fketerangan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="tombol-simpan" onclick="inputDataPendaftaran()">Simpan Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" style="margin-top: 20px;">
                            <div class="panel-heading"><strong>Informasi Penyedia</strong></div>
                            <div class="panel-body">
                                <ul class="list list-icons list-icons-style-3 mt-xlg">
                                    <li><i class="fa fa-user"></i> <strong>Nama :</strong> <?=$detail['nama_user']?></li>
                                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> <?=$detail['alamat_user']?></li>
                                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> <?=$detail['no_hp_user']?></li>
                                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com"> <?=$detail['email_user']?></a></li>
                                </ul>
                             </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabs tabs-product">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                <a href="#productDescription" data-toggle="tab"><i class="fa fa-navicon"></i> Deskripsi</a></li>
                                            <li><a href="#productInfo" data-toggle="tab"><i class="fa fa-map-marker"></i> Maps</a></li>
                                            <li><a href="#productReviews" data-toggle="tab"><i class="fa fa-comments"></i> Komentar</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="productDescription">
                                    <?=$detail['deskripsi_tempat']?>
                                </div>
                                <div class="tab-pane " id="productInfo">
                                    <!-- <table class="table table-striped mt-xl">
                                        <tbody>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tanggal</th>                                                
                                                <th>Jam</th>
                                                <th>Nama Pemesan</th>
                                                <th>Tanggal Pendaftaran</th>
                                                <th>Nama Kegiatan/Acara</th>
                                                <th>Jumlah Pembayaran</th>
                                                <th>Target Hadirin</th>
                                                <th>Kebutuhan</th>
                                                <th>Keterangan</th>
                                            </tr>
                                            <?php for($i=0;$i<count($pemesanan);$i++){ ?>
                                            <tr>
                                                <td><?=$i+1;?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table> -->
                                </div>
                                <div class="tab-pane" id="productReviews">
                                    <ul class="comments">
                                    <?php for ($i=0; $i < count($detail['komentar']); $i++) { ?>
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="" src="<?=base_url()?>assets/images/user/<?=$detail['komentar'][$i]['foto_profil']?>">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
                                                        <strong><?=$detail['komentar'][$i]['nama_user']?></strong>
                                                        <span class="pull-right">
                                                            <div title="Rated 5.00 out of 5" class="star-rating">
                                                                <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                                            </div>
                                                        </span>
                                                    </span>
                                                    <p><?=$detail['komentar'][$i]['komentar']?></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                    <?php if(count($detail['komentar'])>0){?>
                                    <hr class="tall">
                                    <?php } ?>
                                    <h4 class="heading-primary"><?php if($this->session->userdata('nama_user')){echo $this->session->userdata('nama_user'); ?> <small>(<?=$this->session->userdata('email_user');?>)<?php } ?></small></h4>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <form action="" id="submitReview" method="post">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>Review *</label>
                                                            <textarea maxlength="5000" placeholder="Isi komentar anda" rows="5" class="form-control" name="message" id="message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="submit" value="Submit Review" class="btn btn-primary" data-loading-text="Loading...">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <hr class="tall">
            <div class="col-md-12">
                <h3>Pemesanan</h3>
                <div class="panel panel-default">
                    <div class="panel-heading">Huauauauaua</div>
                    <div class="panel-body"></div>
                </div>
            </div>
        </div>
    </div>              
</div>
<!-- <div class="container" style="margin-bottom: 50px;">
    <div class="row">
        <h4 class="mb-md text-uppercase"><strong>Promoted</strong></h4>
        <div class="row tab-content">
            <ul class="products product-thumb-info-list" style="margin-left: -45px">
                <li class="col-sm-3 col-xs-12 product">
                    <span class="product-thumb-info">
                        <a href="shop-product-sidebar.html">
                            <span class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <span class="product-thumb-info-act-left"><em>View</em></span>
                                    <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                </span>
                                <img alt="" class="img-responsive" src="<?=base_url()?>assets/img/products/product-1.jpg">
                            </span>
                        </a>
                        <span class="product-thumb-info-content">
                            <a href="shop-product-sidebar.html">
                                <h4>Makassar</h4>
                                <span class="price">
                                    <del><span class="amount">$325</span></del>
                                    <ins><span class="amount">$299</span></ins>
                                </span>
                            </a>
                        </span>
                    </span>
                </li>
                <li class="col-sm-3 col-xs-12 product">
                    <span class="product-thumb-info">
                        <a href="shop-product-sidebar.html">
                            <span class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <span class="product-thumb-info-act-left"><em>View</em></span>
                                    <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                </span>
                                <img alt="" class="img-responsive" src="<?=base_url()?>assets/img/products/product-4.jpg">
                            </span>
                        </a>
                        <span class="product-thumb-info-content">
                            <a href="shop-product-sidebar.html">
                                <h4>Soppeng</h4>
                                <span class="price">
                                    <span class="amount">$199</span>
                                </span>
                            </a>
                        </span>
                    </span>
                </li>
                <li class="col-sm-3 col-xs-12 product">
                    <span class="product-thumb-info">
                        <a href="shop-product-sidebar.html">
                            <span class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <span class="product-thumb-info-act-left"><em>View</em></span>
                                    <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                </span>
                                <img alt="" class="img-responsive" src="<?=base_url()?>assets/img/products/product-4.jpg">
                            </span>
                        </a>
                        <span class="product-thumb-info-content">
                            <a href="shop-product-sidebar.html">
                                <h4>Soppeng</h4>
                                <span class="price">
                                    <span class="amount">$199</span>
                                </span>
                            </a>
                        </span>
                    </span>
                </li>
                <li class="col-sm-3 col-xs-12 product">
                    <span class="product-thumb-info">
                        <a href="shop-product-sidebar.html">
                            <span class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <span class="product-thumb-info-act-left"><em>View</em></span>
                                    <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                </span>
                                <img alt="" class="img-responsive" src="<?=base_url()?>assets/img/products/product-4.jpg">
                            </span>
                        </a>
                        <span class="product-thumb-info-content">
                            <a href="shop-product-sidebar.html">
                                <h4>Soppeng</h4>
                                <span class="price">
                                    <span class="amount">$199</span>
                                </span>
                            </a>
                        </span>
                    </span>
                </li>
            </ul>
        </div>
    </div>              
</div> -->

<script type="text/javascript">
    /* menyembunyikan form dan alert*/
    function sembunyikanForm(){
        $("#konfirmasi-tanggal").hide();
        $("#tanggal-tersedia").hide();
        $("#form-akses").hide();
        $("#form-akses2").hide();
        $("#form-akses3").hide();
        $("#form-akses4").hide();
        $("#tombol-simpan").hide();
    }
    sembunyikanForm();

    var tanggal="";
    function cek_tanggal(){
        sembunyikanForm();

        tanggal = $("#cekTanggal").val();

        $.ajax({
            type:"POST",
            url: "<?=base_url().'H_balai_diklat/cek_tanggal_detail_tempat'?>",
            data:"tanggal="+tanggal+"&idTempat="+"1",
            success: function(hasil) {
                // alert(hasil);
                var Jwarning = $.parseJSON(hasil);
                if(Jwarning.tanggal.length>0){
                    $('#tanggaltidaktersedia').html('');
                    for (var i=0;i<Jwarning.tanggal.length;i++){
                        $('#tanggaltidaktersedia').append('<li>'+Jwarning.tanggal[i]+'</li>');
                    }
                    $("#konfirmasi-tanggal").show();
                }else{
                    $("#pembayaranperhari").html(Jwarning.harga);
                    $("#tanggal-tersedia").show();
                    $("#form-akses").show();
                    $("#form-akses2").show();
                    $("#form-akses3").show();
                    $("#form-akses4").show();
                    $("#tombol-simpan").show();
                }
            }
        });
    }

    function inputDataPendaftaran(){
        var fnamaKegiatan   = $("#fnamaKegiatan").val();
        var forganisasi     = $("#forganisasi").val();
        var fkebutuhan      = $("#fkebutuhan").val();
        var fketerangan     = $("#fketerangan").val();

        $.ajax({
            type:"POST",
            url: "<?=base_url().'H_balai_diklat/insert_data_pemesanan_balai'?>",
            data:"namaKegiatan="+fnamaKegiatan+"&organisasi="+forganisasi+"&kebutuhan="+fkebutuhan+"&keterangan="+fketerangan+"&tanggal="+tanggal+"&idTempat="+"1",
            success: function(hasil) {
                if (hasil=='berhasil') {
                    window.location.replace('<?=base_url()?>');
                }else{
                    alert('gagal');
                }
            }
        });
    }


</script>