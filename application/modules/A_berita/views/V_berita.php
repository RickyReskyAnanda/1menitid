
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
                    <li class="active" onclick="statusData('rilis')"><a data-toggle="tab" href="#tab-1">Berita Rilis</a></li>
                    <li class=""  onclick="statusData('draft')"><a data-toggle="tab" href="#tab-2">Berita Draft</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <a href="<?=base_url('1menitadmin/berita/tambah')?>"><button class="btn btn-info btn-rounded"><i class="fa fa-plus"></i> Tambah Berita</button></a>
                            <div class="pull-right" style="margin-bottom: 10px;">
                                <button class="btn btn-rounded btn-info awalBatasId" onclick="awalBatas()">Pertama</button>
                                <button class="btn btn-rounded btn-info kurangiBatasId" onclick="kurangiBatas()"><</button>
                                <button class="btn btn-rounded btn-info tambahBatasId" onclick="tambahBatas()">></button>
                                <button class="btn btn-rounded btn-info akhirBatasId" onclick="akhirBatas()">Terakhir</button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Berita Rilis</th>
                                    <th>Penulis</th>
                                    <th>Tanggal Rilis</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody id="beritaRilis">
                                </tbody>
                            </table>
                            <div class="pull-right" style="margin-top: 10px;">
                                <button class="btn btn-rounded btn-info awalBatasId" onclick="awalBatas()">Pertama</button>
                                <button class="btn btn-rounded btn-info kurangiBatasId" onclick="kurangiBatas()"><</button>
                                <button class="btn btn-rounded btn-info tambahBatasId" onclick="tambahBatas()">></button>
                                <button class="btn btn-rounded btn-info akhirBatasId" onclick="akhirBatas()">Terakhir</button>
                            </div>

                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <a href="<?=base_url('1menitadmin/berita/tambah')?>"><button class="btn btn-info btn-rounded"><i class="fa fa-plus"></i> Tambah Berita</button></a>
                            <div class="pull-right" style="margin-bottom: 10px;">
                                <button class="btn btn-rounded btn-info awalBatasId" onclick="awalBatas()">Pertama</button>
                                <button class="btn btn-rounded btn-info kurangiBatasId" onclick="kurangiBatas()"><</button>
                                <button class="btn btn-rounded btn-info tambahBatasId" onclick="tambahBatas()">></button>
                                <button class="btn btn-rounded btn-info akhirBatasId" onclick="akhirBatas()">Terakhir</button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Berita Draft</th>
                                    <th>Penulis</th>
                                    <th>Tanggal Penulisan</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody id="beritaDraft">
                                </tbody>
                            </table>
                            <div class="pull-right" style="margin-top: 10px;">
                                <button class="btn btn-rounded btn-info awalBatasId" onclick="awalBatas()">Pertama</button>
                                <button class="btn btn-rounded btn-info kurangiBatasId" onclick="kurangiBatas()"><</button>
                                <button class="btn btn-rounded btn-info tambahBatasId" onclick="tambahBatas()">></button>
                                <button class="btn btn-rounded btn-info akhirBatasId" onclick="akhirBatas()">Terakhir</button>
                            </div>
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
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-rounded" id="btnHapus" onclick="deleteBerita()">Hapus</button>
                <button type="button" onclick="ubahStatusBerita('draft')" class="btn btn-warning btn-rounded" id="btnDraft">Draft</button>

                <a href="" id="aEdit">
                    <button type="button" class="btn btn-primary btn-rounded" id="btnEdit">Edit</button>
                </a>
                <button type="button" class="btn btn-info btn-rounded" id="btnRilis" onclick="ubahStatusBerita('rilis')">Rilis</button>
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal" onclick="tutupModal()">Close</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var batasLooping = 'awal';
    var Jhasil=[];
    var nomor=0;
    var statusD='rilis';
    function ambilData(){

        var ident = '#beritaRilis';
        if(statusD == 'rilis'){
            $('#beritaRilis').html('');
            ident = '#beritaRilis';
        }else if(statusD == 'draft'){
            $('#beritaDraft').html('');
            ident = '#beritaDraft';
        }

      $('.awalBatasId').prop('disabled', true);
        $('.kurangiBatasId').prop('disabled', true);
        $('.tambahBatasId').prop('disabled', true);
        $('.akhirBatasId').prop('disabled', true);

        $.ajax({
            type:"POST",
            url: "<?=base_url().'A_berita/select_data_berita'?>",
            data:"status="+statusD+"&start="+batasLooping,
            success: function(hasil) {
                Jhasil = $.parseJSON(hasil);
                for (var i=0;i<Jhasil.isi.length;++i){
                    nomor=parseInt(Jhasil.nomor)+1+i;
                    $(ident).append('<tr><td>'+(nomor)+'</td><td>'+Jhasil.isi[i].judul_berita+'</td><td>'+Jhasil.isi[i].id_admin+'</td><td>'+Jhasil.isi[i].tgl_rilis+'</td><td><button class="btn btn-primary btn-rounded"  data-toggle="modal" data-target="#detailBerita" data-backdrop="false" onclick=viewDetail('+Jhasil.isi[i].id_berita+')><i class="fa fa-list-alt"></i> Detail</button></td></tr>');
                }
                if(Jhasil.isi.length=='0'){
                    $(ident).append('<tr><td colspan="5"><h3 align="center">Data Kosong </h3></td></tr>');
                }

                if(batasLooping=='awal'){
                    $('.awalBatasId').prop('disabled', true);
                    $('.kurangiBatasId').prop('disabled', true);
                    $('.tambahBatasId').prop('disabled', false);
                    $('.akhirBatasId').prop('disabled', false);
                }else if(batasLooping=='akhir'){
                    $('.awalBatasId').prop('disabled', false);
                    $('.kurangiBatasId').prop('disabled', false);
                    $('.tambahBatasId').prop('disabled', true);
                    $('.akhirBatasId').prop('disabled', true);
                }


                batasLooping = parseInt(Jhasil.nomor);
                if (batasLooping==0) {
                    $('.awalBatasId').prop('disabled', true);
                    $('.kurangiBatasId').prop('disabled', true);
                    $('.tambahBatasId').prop('disabled', false);
                    $('.akhirBatasId').prop('disabled', false);
                }
                if (Jhasil.isi.length>=10) {
                    
                    $('.tambahBatasId').prop('disabled', false);
                    $('.akhirBatasId').prop('disabled', false);
                }else{
                    $('.tambahBatasId').prop('disabled', true);
                    $('.akhirBatasId').prop('disabled', true);
                }

                if (nomor>10){
                    $('.awalBatasId').prop('disabled', false);
                    $('.kurangiBatasId').prop('disabled', false);
                }else{
                    $('.awalBatasId').prop('disabled', true);
                    $('.kurangiBatasId').prop('disabled', true);
                }

                
            }
        });
    }
    function statusData(status){
        statusD=status;
        awalBatas();
    }
    function awalBatas(){
        batasLooping='awal';
        ambilData();
    }
    awalBatas();
    function kurangiBatas(){
        if(batasLooping>=10){
            batasLooping-=10;
            ambilData();
        }

    }
    function tambahBatas(){
        if(Jhasil.isi.length==10){
            batasLooping+=10;
            ambilData();
        }
    }
    function akhirBatas(){
        batasLooping='akhir';
        ambilData();
    }

    function btnModal(tampil){
        if(tampil==false){
            $('#btnRilis').hide();
            $('#btnDraft').hide();
            $('#btnHapus').hide();
            $('#btnEdit').hide();
        }else{
            if(statusD=='draft'){
                $('#btnRilis').show();
                $('#btnDraft').hide();
            }else if(statusD=='rilis'){
                $('#btnRilis').hide();
                $('#btnDraft').show();
            }
            $('#btnEdit').show();
            $('#btnHapus').show();
        }
    }
    var identitasBerita=0;
    btnModal(false);
    function viewDetail(id){
        identitasBerita=id;
        $.ajax({
            type:"POST",
            url: "<?=base_url().'A_berita/view_detail_berita'?>",
            data:"id="+id,
            success: function(hasil) {
                $('#isiDetail').html(hasil);
                btnModal(true);
            },
            error: function(){
                $('#isiDetail').html('<h2>Ada Gangguan Jaringan !</h2>');
            }
        });

        $('#aEdit').prop('href', '<?=base_url()?>1menitadmin/berita/edit/'+id);
        
    }

    function deleteBerita(){
        swal({
            title: "Apakah Anda Ingin Menghapus Berita ?",
            text: "Berita akan terhapus dan tidak dapat dikembalikan lagi!",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Batal",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                type:"POST",
                url: "<?=base_url().'A_berita/delete_data_berita'?>",
                data:"id="+identitasBerita,
                success: function(hasil) {
                    if(hasil=='berhasil'){
                        swal("Berhasil!", "Berhasil menghapus berita.", "success");
                        $('#isiDetail').html('<h2>Berita telah dihapus</h2>');
                        ambilData();
                        btnModal(false);

                    }else{
                        swal("Gagal!", "Gagal menghapus berita.", "error");
                    }
                }
            });
        });
    }
    function ubahStatusBerita(status){
        swal({
            title: "Apakah Anda Ingin Mengganti Status Berita ?",
            text: "Berita akan tersimpan di tabel berbeda!",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Batal",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                type:"POST",
                url: "<?=base_url().'A_berita/update_status_data_berita'?>",
                data:"id="+identitasBerita+"&status="+status,
                success: function(hasil) {
                    if(hasil=='berhasil'){
                        swal("Berhasil!", "Berhasil mengubah status berita.", "success");
                        ambilData();
                    }else{
                        swal("Gagal!", "Gagal mengubah status berita.", "error");
                    }
                },
                error: function(){
                    swal("Gagal!", "Terjadi Masalah", "error");
                }
            });
        });
    }

    function tutupModal(){
        $('#isiDetail').html('');
        btnModal(false);
    }
</script>