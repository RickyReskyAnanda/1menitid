<section class="page-header page-header-color page-header-quaternary page-header-more-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Header Color</h1>
                
            </div>
            <div class="col-md-6 ">
                <span class="pull-right">
                    <a href="<?=base_url('user')?>">
                        <button class="btn btn-primary"><i class="fa fa-home"></i></button>
                    </a>
                    <a href="<?=base_url('user/daftar-tempat')?>">
                        <button class="btn btn-primary"><i class="fa fa-list"></i> Pemesanan</button>
                    </a>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Penyedia <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="<?=base_url('user/penyedia')?>">Daftar Tempat <span class="badge">42</span></a></li>
                            <li><a href="<?=base_url('user/penyedia/pemesanan')?>">Pemesanan <span class="badge">42</span></a></li>
                            <li><a href="<?=base_url('user/penyedia/pembayaran')?>">Pembayaran <span class="badge">42</span></a></li>
                          </ul>
                        </div>
                    <a href="<?=base_url('user/daftar-tempat')?>">
                        <button class="btn btn-primary"><i class="fa fa-list"></i> Profil</button>
                    </a>
                    <a href="<?=base_url('user/daftar-tempat')?>">
                        <button class="btn btn-primary"><i class="fa fa-list"></i> Log Out</button>
                    </a>
                </span>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-bottom: 100px; margin-top: 50px">
    <div class="tabs ">
        <ul class="nav nav-tabs nav-justified">
            <li class="active">
                <a href="#pemesananTempat" data-toggle="tab"><!-- <i class="fa fa-"></i> --> Pemesanan</a>
            </li>
            <li>
                <a href="#menungguKonfirmasi" data-toggle="tab">Menunggu Konfirmasi</a>
            </li>
            <li>
                <a href="#pemesananDikonfirmasi" data-toggle="tab">Konfirmasi Pemesanan</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="pemesananTempat" class="tab-pane active">
                <div class="featured-boxes">
                    <?php for ($i=0; $i < count($tempat); $i++) { 
                        if($tempat[$i]['status']=='daftar'){?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="featured-box featured-box-primary align-left mt-xlg" >
                                <div class="box-content">
                                    <h3 class="heading-primary text-uppercase mb-md"><i class="fa fa-building-o"></i> <?=$tempat[$i]['nama_tempat']?> <small>(<?=ucfirst($tempat[$i]['jenis_tempat'])?>)</small></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="cart-totals">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Nama Kegiatan</th>
                                                        <td><?=ucfirst($tempat[$i]['nama_kegiatan'])?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Organisasi / Perusahaan</th>
                                                        <td><?=ucfirst($tempat[$i]['nama_organisasi'])?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Waktu Pendaftaran</th>
                                                        <td><?=$tempat[$i]['waktu_pendaftaran']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kebutuhan</th>
                                                        <td><?=ucfirst($tempat[$i]['kebutuhan'])?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Keterangan</th>
                                                        <td><?=ucfirst($tempat[$i]['keterangan'])?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="cart-totals">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th style="color:#0088cc !important">Pembayaran</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Penyewaan</th>
                                                        <td>
                                                            <?php for ($a=0; $a < count($tempat[$i]['tanggal']); $a++) { ?>
                                                                <li><?=$tempat[$i]['tanggal'][$a]['tanggal'] ?></li>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Uang Muka</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Invoice</th>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 class="heading-primary"><b>Tempat</b></h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/images/tempat/dp/<?=$tempat[$i]['gambar_dp']?>">
                                        </div>
                                        <div class="col-md-8">
                                            <table class="cart-totals">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th style="color:#0088cc !important">Nama tempat</th>
                                                        <td><?=$tempat[$i]['nama_tempat']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Akun penyedia</th>
                                                        <td><?=$tempat[$i]['nama_user']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Kontak</th>
                                                        <td><?=$tempat[$i]['no_hp_user']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Lokasi</th>
                                                        <td><?=$tempat[$i]['lokasi']?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-lg btn-primary pull-right" style="margin-top: 10px;" data-toggle="modal" data-target="#defaultModal" onclick="viewDataPembayaran(<?=$tempat[$i]['id_pendaftaran']?>)">Pembayaran</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <div id="menungguKonfirmasi" class="tab-pane">
                <div class="featured-boxes">
                    <?php for ($i=0; $i < count($tempat); $i++) { 
                        if($tempat[$i]['status']=='menunggu'){?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="featured-box featured-box-secondary align-left mt-xlg" >
                                <div class="box-content">
                                    <h3 class="heading-primary text-uppercase mb-md"><i class="fa fa-building-o"></i> <?=$tempat[$i]['nama_tempat']?> <small>(<?=ucfirst($tempat[$i]['jenis_tempat'])?>)</small></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="cart-totals">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Nama Kegiatan</th>
                                                        <td><?=ucfirst($tempat[$i]['nama_kegiatan'])?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Organisasi / Perusahaan</th>
                                                        <td><?=ucfirst($tempat[$i]['nama_organisasi'])?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Waktu Pendaftaran</th>
                                                        <td><?=$tempat[$i]['waktu_pendaftaran']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kebutuhan</th>
                                                        <td><?=ucfirst($tempat[$i]['kebutuhan'])?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Keterangan</th>
                                                        <td><?=ucfirst($tempat[$i]['keterangan'])?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="cart-totals">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th style="color:#0088cc !important">Pembayaran</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Penyewaan</th>
                                                        <td>
                                                            <?php for ($a=0; $a < count($tempat[$i]['tanggal']); $a++) { ?>
                                                                <li><?=$tempat[$i]['tanggal'][$a]['tanggal'] ?></li>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Uang Muka</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Invoice</th>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 class="heading-primary"><b>Tempat</b></h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/images/tempat/dp/<?=$tempat[$i]['gambar_dp']?>">
                                        </div>
                                        <div class="col-md-8">
                                            <table class="cart-totals">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th style="color:#0088cc !important">Nama tempat</th>
                                                        <td><?=$tempat[$i]['nama_tempat']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Akun penyedia</th>
                                                        <td><?=$tempat[$i]['nama_user']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Kontak</th>
                                                        <td><?=$tempat[$i]['no_hp_user']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Lokasi</th>
                                                        <td><?=$tempat[$i]['lokasi']?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <div id="pemesananDikonfirmasi" class="tab-pane">
                <div class="featured-boxes">
                    <?php for ($i=0; $i < count($tempat); $i++) { 
                        if($tempat[$i]['status']=='diterima'||$tempat[$i]['status']=='ditolak'){?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="featured-box featured-box-tertiary align-left mt-xlg" >
                                <div class="box-content">
                                    <h3 class="heading-primary text-uppercase mb-md"><i class="fa fa-building-o"></i> <?=$tempat[$i]['nama_tempat']?> <small>(<?=ucfirst($tempat[$i]['jenis_tempat'])?>)</small></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="cart-totals">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Nama Kegiatan</th>
                                                        <td><?=ucfirst($tempat[$i]['nama_kegiatan'])?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Organisasi / Perusahaan</th>
                                                        <td><?=ucfirst($tempat[$i]['nama_organisasi'])?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Waktu Pendaftaran</th>
                                                        <td><?=$tempat[$i]['waktu_pendaftaran']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kebutuhan</th>
                                                        <td><?=ucfirst($tempat[$i]['kebutuhan'])?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Keterangan</th>
                                                        <td><?=ucfirst($tempat[$i]['keterangan'])?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="cart-totals">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th style="color:#0088cc !important">Pembayaran</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Penyewaan</th>
                                                        <td>
                                                            <?php for ($a=0; $a < count($tempat[$i]['tanggal']); $a++) { ?>
                                                                <li><?=$tempat[$i]['tanggal'][$a]['tanggal'] ?></li>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Uang Muka</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Invoice</th>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 class="heading-primary"><b>Tempat</b></h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/images/tempat/dp/<?=$tempat[$i]['gambar_dp']?>">
                                        </div>
                                        <div class="col-md-8">
                                            <table class="cart-totals">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th style="color:#0088cc !important">Nama tempat</th>
                                                        <td><?=$tempat[$i]['nama_tempat']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Akun penyedia</th>
                                                        <td><?=$tempat[$i]['nama_user']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Kontak</th>
                                                        <td><?=$tempat[$i]['no_hp_user']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Lokasi</th>
                                                        <td><?=$tempat[$i]['lokasi']?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>

    
</div>
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Pembayaran</h4>
            </div>
            <div class="modal-body">
                <h4 id="nama_tempat"></h4>
                <div class="tabs">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#pembayaran" data-toggle="tab"><i class="fa fa-dollar"></i> Pembayaran</a>
                        </li>
                        <li>
                            <a href="#info" data-toggle="tab">Infomasi</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="pembayaran" class="tab-pane active">
                            <table class="cart-totals">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th style="color:#0088cc !important">Nama Tempat</th>
                                        <td id="namaTempat"></td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th style="color:#0088cc !important">Uang Muka</th>
                                        <td id="uangMuka"></td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th style="color:#0088cc !important">Rekening</th>
                                        <td id="rekening"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <form method="post" action="<?=base_url('U_daftar_tempat/insert_data_bukti_pembayaran')?>" enctype="multipart/form-data">
                                
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-12">
                                        <input type="file" class="form-control" name="buktiPembayaran" >
                                        * Upload bukti pembayaran uang muka
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" type="submit">Kirim</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div id="info" class="tab-pane">
                            <p>Aturan Pembayaran</p>
                            <p>Setelah melakukan pemesanan tempat, Anda wajib melakukan pembayaran <strong>uang muka</strong> selama 24 jam batas waktu yang telah ditentukan.</p>
                            <p>Cara melakukan pembayaran uang muka</p>
                            <p>Kirimkan sejumlah uang yang telah tertera di form pembayaran atau invoice ke rekening user dan lakukan konfirmasi dengan mengirimkan bukti foto pembayaran berupa struk pembayaran.</p>
                            <p>Setelah melakukan input maka penyedia tempat akan melakukan konfirmasi</p>
                            <p>Untuk sisa pembayaran bisa dilakukan di tempat setelah acara/kegiatan selesai</p>
                            <p>Terima Kasih !</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function viewDataPembayaran(idPendaftaran){
        $.ajax({
            type:"POST",
            url: "<?=base_url().'U_daftar_tempat/select_data_pendaftaran'?>",
            data:"idPendaftaran="+idPendaftaran,
            success: function(hasil) {
                // alert(hasil);
                var Jhasil = $.parseJSON(hasil);
                
                $('#namaTempat').html(Jhasil.nama_tempat);
                $('#uangMuka').html(Jhasil.uang_muka);
                $('#rekening').html(Jhasil.no_rekening);
            }
        });
    }
</script>