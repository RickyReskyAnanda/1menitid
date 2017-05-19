<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Pengaturan Akun</h5>
                </div>
                <div class="ibox-content">
                    <div class="row" style="margin-bottom: 10px;">
                        <label class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-10"><input id="iNama" type="text" class="form-control" required></div>
                    </div>

                    <div class="row" style="margin-bottom: 10px;">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10"><input id="iEmail" type="email" class="form-control" required></div>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <label class="col-sm-2 control-label">Posisi</label>
                        <div class="col-sm-10"><input id="iPosisi" type="text" class="form-control" required></div>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <label class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="iJk">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="iStatus">
                                <option value="aktif">Aktif</option>
                                <option value="tidak-aktif">Tidak-aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10"><textarea id="iAlamat" class="form-control" required></textarea></div>
                    </div>
                    <hr class="hr">
                    <div class="row" style="margin-bottom: 10px;">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-4"><input id="iPasslama" type="text" class="form-control" required></div>
                        <div class="col-sm-4"><input id="iPassbaru" type="text" class="form-control" placeholder="Confirm" required></div>
                        <div class="col-sm-2"><button class="btn btn-primary" onclick="gantiPass()">Ganti</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function dataAkun(){
        $.ajax({
            type:"POST",
            url: "<?=base_url().'A_akun/select_data_edit_akun'?>",
            data:"idAkun=<?= $this->session->userdata('id_akun'); ?>",
            success: function(hasil) {
                alert(hasil);
                Jhasil = $.parseJSON(hasil);
                $('#iNama').val(Jhasil.nama);
                $('#iEmail').val(Jhasil.email);
                $('#iPosisi').val(Jhasil.posisi);
                $('#iAlamat').val(Jhasil.alamat);
                $('#iJk').val(Jhasil.jk);
                $('#iStatus').val(Jhasil.status);
            }
        });
    }
    dataAkun();
</script>