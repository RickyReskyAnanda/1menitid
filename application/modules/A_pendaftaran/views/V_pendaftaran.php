<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-9">
        <h2>Manajemen User</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Beranda</a>
            </li>
            <li class="active">
                Admin
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <div class="tab-content">
                    <div class="panel-body">
                        <a href="<?=base_url('admin/anggota/tambah')?>">
                            <button class="btn btn-info btn-rounded" style="margin-bottom: 10px ">
                                <i class="fa fa-plus"></i> Tambah Admin
                            </button>
                        </a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>No Hp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="adminLoop">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function dataAdmin(){
        $('#adminLoop').html('');
         $.ajax({
            url: "<?=base_url('A_admin/select_data_admin')?>",
            success: function(hasil) {
                Jadmin = $.parseJSON(hasil);

                for (var i=0;i<Jadmin.length;++i){
                        $('#adminLoop').append('<tr><td>'+(i+1)+'</td><td><img class="img-responsive img-thumbnail" src="'+Jadmin[i].foto+'"></td><td>'+Jadmin[i].nama_lengkap+'</td><td>'+Jadmin[i].email+'</td><td>'+Jadmin[i].no_hp+'</td><td><button class="btn btn-info btn-rounded">Edit</button><button class="btn btn-danger btn-rounded" onclick="deleteData('+Jadmin[i].id_admin+')">Hapus</button></td></tr>');
                }
            }
        });
    }
    dataAdmin();
</script>