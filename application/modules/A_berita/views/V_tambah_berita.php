
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active" onclick="statusData('rilis')"><a data-toggle="tab" href="#tab-1">Berita Rilis</a></li>
                    <li class=""  onclick="statusData('draft')"><a data-toggle="tab" href="#tab-2">Berita Draft</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <button class="btn btn-info btn-rounded"><i class="fa fa-plus"></i> Tambah Berita</button>
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
                            <button class="btn btn-info btn-rounded"><i class="fa fa-plus"></i> Tambah Berita</button>
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
                // alert(hasil);
                Jhasil = $.parseJSON(hasil);

                for (var i=0;i<Jhasil.isi.length;++i){
                    nomor=parseInt(Jhasil.nomor)+1+i;
                    if(Jhasil.isi.length>=1){
                        $(ident).append('<tr><td>'+(nomor)+'</td><td>'+Jhasil.isi[i].judul_berita+'</td><td>'+Jhasil.isi[i].id_admin+'</td><td>'+Jhasil.isi[i].tgl_rilis+'</td><td><button class="btn btn-info btn-rounded"  data-toggle="modal" data-target=".myModal5" onclick=viewDetail('+Jhasil.isi[i].id_berita+')><i class="fa fa-list-alt"></i> Detail</button></td></tr>');
                    }else{
                        $(ident).append('<tr><td colspan="5"></td></tr>');
                    }
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
</script>