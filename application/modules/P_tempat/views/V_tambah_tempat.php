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
<div class="container" style="margin-bottom: 100px; margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="<?=base_url('P_tempat/insert_data_provider_tempat')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Nama Tempat</b></label>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="text" name="nama_tempat" class="form-control" placeholder="Masukkan nama tempat" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Jenis Tempat</b></label>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <select class="form-control" name="jenis_tempat" required>
                                <option value="gedung-serbaguna">Gedung Serbaguna</option>
                                <option value="balai-diklat">Balai Diklat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Pembayaran</b></label>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <select class="form-control" name="pembayaran" required>
                                <option value="hari">-/Hari</option>
                                <option value="jam">-/Jam</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Lokasi</b></label>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <textarea class="form-control" name="lokasi" placeholder="Masukkan lokasi tempat" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Luas Ruangan</b></label>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="number" name="luas" class="form-control" placeholder="Masukkan Luas Ruangan" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Jam Buka</b></label>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="text" name="jam_buka" class="form-control" placeholder="Masukkan Jam Buka" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Jam Tutup</b></label>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="text" name="jam_tutup" class="form-control" placeholder="Masukkan jam Tutup" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Harga</b></label>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="number" name="harga" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Gambar Depan</b></label>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="file" name="gambar_dp" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Galeri foto Gedung</b></label>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="file" name="gambar_tempat[]" class="form-control" multiple required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"><b class="pull-right">Deskripsi</b></label>
                    <div class="col-md-8">
                        <textarea class="input-block-level" id="summernote" name="content" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-11">
                        <div class="pull-right">
                            <button class="btn btn-danger" style="margin-right: 10px;">Reset</button>
                            <button class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
