<div class="wraper container-fluid">
    <!-- Modal -->
    <div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content p-0 b-0">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading"> 
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                        <h3 class="panel-title">Detail Tempat</h3> 
                    </div> 
                    <div class="panel-body" id="isiModal"> 
                        
                    </div> 
                    <div class="panel-footer">
                        <button class="btn btn-primary"><i class="ion-clock"></i> Proses</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Batas Modal -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pengajuan Tempat</h3>
                </div>
                <div class="panel-body">
                <div class="col-md-12"> 
                        <ul class="nav nav-tabs"> 
                            <li class="active"> 
                                <a href="#balai" data-toggle="tab" aria-expanded="true"> 
                                    <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                    <span class="hidden-xs">Balai Diklat</span> 
                                </a> 
                            </li> 
                            <li class=""> 
                                <a href="#gedung" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-building"></i></span> 
                                    <span class="hidden-xs">Gedung Serbaguna</span> 
                                </a> 
                            </li> 
                        </ul> 
                        <div class="tab-content"> 
                            <div class="tab-pane active" id="balai"> 
                                <div> 
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Tempat</th>
                                                <th>Kecamatan</th>
                                                <th>Lokasi</th>
                                                <th>User</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $a=0;
                                            for ($i=0; $i < count($tempat); $i++) { if($tempat[$i]['jenis_tempat']=='balai-diklat'){?>
                                            <tr>
                                                <td><?=++$a?></td>
                                                <td><?=ucfirst($tempat[$i]['nama_tempat'])?></td>
                                                <td><?=ucfirst($tempat[$i]['kecamatan'])?></td>
                                                <td><?=ucfirst($tempat[$i]['lokasi'])?></td>
                                                <td><?=ucfirst($tempat[$i]['id_user'])?></td>
                                                <td>
                                                    <button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#panel-modal" onclick="detailTempat('<?=$tempat[$i]['id_tempat']?>')">Detail</button>
                                                </td>
                                            </tr>
                                            <?php } }?>
                                        </tbody>
                                    </table>
                                </div> 
                            </div> 
                            <div class="tab-pane" id="gedung"> 
                                <div> 
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Tempat</th>
                                                <th>Kecamatan</th>
                                                <th>Lokasi</th>
                                                <th>User</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $a=0;
                                            for ($i=0; $i < count($tempat); $i++) { 
                                                if($tempat[$i]['jenis_tempat']=='gedung-serbaguna'){?>
                                            <tr>
                                                <td><?=++$a?></td>
                                                <td><?=ucfirst($tempat[$i]['nama_tempat'])?></td>
                                                <td><?=ucfirst($tempat[$i]['kecamatan'])?></td>
                                                <td><?=ucfirst($tempat[$i]['lokasi'])?></td>
                                                <td><?=ucfirst($tempat[$i]['id_user'])?></td>
                                                <td>
                                                    <button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#panel-modal" onclick="detailTempat('<?=$tempat[$i]['id_tempat']?>')">Detail</button>
                                                </td>
                                            </tr>
                                            <?php } }?>
                                        </tbody>
                                    </table>
                                </div> 
                            </div>
                        </div> 
                    </div> 
                    
                </div> <!-- end panel-body -->
            </div>
        </div>
    </div> <!-- end row -->
</div>
<!-- Page Content Ends -->

<script type="text/javascript">
    function detailTempat(idTempat){
        $('#isiModal').html('');
        $.ajax({
            type:"POST",
            url: "<?=base_url().'A_tempat/view_detail_tempat'?>",
            data:"&idTempat="+idTempat,
            success: function(hasil) {
                $('#isiModal').append(hasil);
            },
            error : function(hasil){
                alert(hasil);
            }
        });
    }
</script>
