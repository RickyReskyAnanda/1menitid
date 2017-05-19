<div class="row">
    <div class="col-md-12">
        <h3><?=$data['judul_berita']?></h3>
    </div>
</div>
<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <figure>
            <iframe align="center" width="100%" height="400" src="<?=$data['link_video']?>" frameborder="0" allowfullscreen></iframe>
        </figure>
    </div>
</div>
<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <p><i class="fa fa-clock-o"></i> <?=date_format(date_create($data['tgl_rilis']), "d F Y, h:m ")?></p>
        <p><?=$data['deskripsi']?></p>
        <p>Sumber : <?=$data['sumber']?></p>
        <label>Penulis : <?=$data['id_admin']?></label>
    </div>
</div>