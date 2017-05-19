
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-md-12">
            <?php if($this->session->flashdata('pesanproses')!=''){?>
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <?= ucfirst($this->session->flashdata('pesanproses')); ?>
            </div>
            <?php } ?>
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active" onclick="ambilData('Editor','#editorText')"><a data-toggle="tab" href="#tab-1">Editor</a></li>
                    <li class=""  onclick="ambilData('Admin','#adminText')"><a data-toggle="tab" href="#tab-2">Admin</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <button class="btn btn-info btn-rounded" data-toggle="modal" data-target="#detailBerita" data-backdrop="false" style="margin-bottom: 10px;" onclick="viewTambah()"><i class="fa fa-plus"></i> Tambah Editor</button>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Editor</th>
                                    <th>Email</th>
                                    <th>Posisi</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Waktu berubah</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody id="editorText">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <button class="btn btn-info btn-rounded" data-toggle="modal" data-target="#detailBerita" data-backdrop="false" style="margin-bottom: 10px;"><i class="fa fa-plus"></i> Tambah Admin</button>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Admin</th>
                                    <th>Email</th>
                                    <th>Posisi</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Waktu berubah</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody id="adminText">
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                
            </div><!-- .tab -->

        </div><!-- .col 12 -->
    </div><!-- .row -->
</div>
<div class="modal inmodal" id="detailBerita" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="tutupModal()"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Detail Berita</h4>
            </div>
            <div class="modal-body" id="isiDetail">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning btn-rounded" onclick="resetPassword()" data-dismiss="modal">Reset Password</button>
                <button type="button" class="btn btn-info btn-rounded" onclick="simpanAkun()" data-dismiss="modal">Simpan</button>
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var gLevel='Editor';
    var gId='#editorText';
    var i = 0;
    var kondisi='aktif';
    var gIdAkun='0';
    var gRU='tambah';
    function ambilData(role,idtabel){
        gLevel  = role;
        gId     = idtabel;
        $(gId).html('');
        if(kondisi=='aktif'){
            kondisi='naktif';
            $.ajax({
                type:"POST",
                url: "<?=base_url().'A_akun/select_data_akun'?>",
                data:"level="+role,
                success: function(hasil) {
                    Jhasil = $.parseJSON(hasil);
                    for ( i=0;i<Jhasil.length;++i){
                        $(gId).append('<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+Jhasil[i].nama+'</td>'+
                                '<td>'+Jhasil[i].email+'</td>'+
                                '<td>'+Jhasil[i].posisi+'</td>'+
                                '<td>'+Jhasil[i].jk+'</td>'+
                                '<td>'+Jhasil[i].status+'</td>'+
                                '<td>'+Jhasil[i].data_change+'</td>'+
                                '<td><button class="btn btn-primary btn-rounded" onclick="viewAkun('+Jhasil[i].id_akun+')" data-toggle="modal" data-target="#detailBerita" data-backdrop="false"><i class="fa fa-pencil"></i> Edit</button><button class="btn btn-danger btn-rounded" onclick=deleteAkun('+Jhasil[i].id_akun+')><i class="fa fa-trash"></i> Hapus</button></td></tr>');
                    }
                    if(Jhasil.length=='0'){
                        $(gId).html('<tr><td colspan="8"><h3 align="center">Data Kosong </h3></td></tr>');
                    }
                    kondisi='aktif';
                }
            });
        }
    }
    ambilData('Editor','#editorText');


    function viewTambah(){
        gRU='tambah';
        var tNama       = $('#iNama').val('');
        var tEmail      = $('#iEmail').val('');
        var tPosisi     = $('#iPosisi').val('');
        var tJk         = $('#iJk').val('laki-laki');
        var tStatus     = $('#iStatus').val('aktif');
        var tAlamat     = $('#iAlamat').val('');
    }
    function tambahAkun(){
        var tNama       = $('#iNama').val();
        var tEmail      = $('#iEmail').val();
        var tPosisi     = $('#iPosisi').val();
        var tJk         = $('#iJk').val();
        var tStatus     = $('#iStatus').val();
        var tAlamat     = $('#iAlamat').val();

        $.ajax({
            type:"POST",
            url: "<?=base_url().'A_akun/insert_data_akun'?>",
            data:"nama="+tNama+"&email="+tEmail+"&posisi="+tPosisi+"&jk="+tJk+"&status="+tStatus+"&alamat="+tAlamat+"&role="+gLevel,
            success: function(hasil) {
                // alert(hasil);
                if(hasil=='berhasil'){
                    ambilData(gLevel,gId);
                    $('#iNama').val('');
                    $('#iEmail').val('');
                    $('#iPosisi').val('');
                    $('#iAlamat').val('');
                    swal("Berhasil!", "Berhasil menginput akun.", "success");
                }else{
                    swal("Gagal!", "Gagal menginput akun.", "error");
                }
            }
        });
    }

    function viewAkun(idAkun){
        gRU='edit';
        gIdAkun=idAkun;
        $.ajax({
            type:"POST",
            url: "<?=base_url().'A_akun/select_data_edit_akun'?>",
            data:"idAkun="+idAkun,
            success: function(hasil) {
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

    function editAkun(){
        var tNama       = $('#iNama').val();
        var tEmail      = $('#iEmail').val();
        var tPosisi     = $('#iPosisi').val();
        var tJk         = $('#iJk').val();
        var tStatus     = $('#iStatus').val();
        var tAlamat     = $('#iAlamat').val();

        $.ajax({
            type:"POST",
            url: "<?=base_url().'A_akun/update_data_akun'?>",
            data:"nama="+tNama+"&email="+tEmail+"&posisi="+tPosisi+"&jk="+tJk+"&status="+tStatus+"&alamat="+tAlamat+"&id_akun="+gIdAkun,
            success: function(hasil) {
                // alert(hasil);
                if(hasil=='berhasil'){
                    ambilData(gLevel,gId);
                    $('#iNama').val('');
                    $('#iEmail').val('');
                    $('#iPosisi').val('');
                    $('#iJk').val('laki-laki');
                    $('#iStatus').val('aktif');
                    $('#iAlamat').val('');
                    swal("Berhasil!", "Berhasil memperbaharui akun.", "success");
                }else{
                    swal("Gagal!", "Gagal memperbaharui akun.", "error");
                }
            }
        });
    }

    function simpanAkun(){
        if(gRU=='tambah'){
            tambahAkun();
        }else if(gRU=='edit'){
            editAkun();
        }
    }
    function deleteAkun(idAkun){
        swal({
            title: "Apakah Anda Ingin Menghapus Akun ?",
            text: "Akun akan terhapus dan tidak dapat dikembalikan lagi!",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Batal",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                type:"POST",
                url: "<?=base_url().'A_akun/delete_data_akun'?>",
                data:"id="+idAkun,
                success: function(hasil) {
                    if(hasil=='berhasil'){
                        swal("Berhasil!", "Berhasil menghapus akun.", "success");
                        ambilData(gLevel,gId);
                    }else{
                        swal("Gagal!", "Gagal menghapus Akun.", "error");
                    }
                }
            });
        });
    }
    function resetPassword(){
        swal({
            title: "Apakah Anda Ingin Me-reset password Akun ?",
            text: "Password akan kembali ke password default!",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Batal",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                type:"POST",
                url: "<?=base_url().'A_akun/reset_pass_akun'?>",
                data:"id="+gIdAkun,
                success: function(hasil) {
                    if(hasil=='berhasil'){
                        swal("Berhasil!", "Berhasil mereset password akun.", "success");
                    }else{
                        swal("Gagal!", "Gagal mereset password Akun.", "error");
                    }
                }
            });
        });
    }
</script>