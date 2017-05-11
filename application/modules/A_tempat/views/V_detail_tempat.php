<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-6">
        <img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/images/tempat/dp/<?=$tempat['gambar_dp']?>">
    </div>
    <div class="col-md-6">
        <table class="table table-condensed">
            <tr>
                <th><h4><i class="ion-information"></i></h4></th>
                <th><h4><?=ucfirst($tempat['nama_tempat'])?></h4></th>
            </tr>
            <tr>
                <td><i class="ion-location"></i></td>
                <td><?=ucfirst($tempat['lokasi'])?></td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-condensed">
            <tr>
                <th>Kecamatan</th>
                <td><?=ucfirst($tempat['kecamatan'])?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td><?="Rp. " . number_format($tempat['harga'],2,',','.');?>/<?=$tempat['pembayaran']?></td>
            </tr>
            <tr>
                <th>Luas</th>
                <td><?=$tempat['luas']?> m2</td>
            </tr>
            <tr>
                <th>Jam Buka</th>
                <td><?=$tempat['jam_buka'].' - '.$tempat['jam_tutup']?></td>
            </tr>
            <tr>
                <th>Libur</th>
                <td><?=ucfirst($tempat['libur'])?></td>
            </tr>
            <tr>
                <td colspan="2"><?=ucfirst($tempat['deskripsi_tempat'])?></td>
            </tr>
        </table>
    </div>
</div>
