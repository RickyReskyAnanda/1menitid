<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Tambah Berita</h5>
                </div>
                <div class="ibox-content">
                    <form method="post" action="<?=base_url('A_berita/update_data_berita')?>" class="form-horizontal" enctype="multipart/form-data">
                        <input type="hidden" name="id_berita" value="<?=$data['id_berita']?>">
                        <input type="hidden" name="gambar_lama" value="<?=$data['gambar']?>">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Judul Berita</label>
                            <div class="col-sm-10"><input name="judul_berita" type="text" class="form-control" value="<?=$data['judul_berita']?>" required></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-10"><textarea name="deskripsi" class="form-control" required><?=$data['deskripsi']?></textarea></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Gambar</label>
                            <div class="col-sm-4">
                                <input name="gambar_dp" type="file" class="form-control">
                                *input untuk mengganti
                            </div>
                            <div class="col-sm-6">
                                <img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/xyz/<?=$data['gambar']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Link Video Youtube</label>
                            <div class="col-sm-10"><input name="link" type="text" class="form-control" value="<?=$data['link_video']?>" required></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status" required>
                                    <option value="rilis" <?php if ($data['status']=='rilis')echo 'selected' ?>>Rilis</option>
                                    <option value="draft" <?php if ($data['status']=='draft')echo 'selected' ?>>Draft</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sumber</label>
                            <div class="col-sm-10"><input name="sumber" type="text" class="form-control" value="<?=$data['sumber']?>" required></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary btn-rounded" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- .col 12 -->
    </div><!-- .row -->
</div>