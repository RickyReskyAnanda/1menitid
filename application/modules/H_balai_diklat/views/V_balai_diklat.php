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
                <h1>Balai Diklat</h1>
            </div>
        </div>
    </div>
</section> 
<div class="container" style="margin-bottom: 100px">
    <div class="row">
        <div class="col-md-4">
            <blockquote class="with-borders">
            <div class="row">
                <div class="col-md-10">
                    <div class="input-group mb-md">
                        <span class="input-group-addon"><i class="fa fa-search"></i> </span>
                        <input type="text" class="form-control" placeholder="Username" id="s_nama_tempat">
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" onclick="cariNamaTempat(1)"><i class="fa fa-search"></i> </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="input-group mb-md">
                        <span class="input-group-addon"><b>$</b></span>
                        <select class="form-control" id="s_harga">
                            <option value="1">Rp.100.000 - Rp.500.000</option>
                            <option value="2">Rp.500.000 - Rp.1000.000</option>
                            <option value="3">Rp.1.000.000 - Rp.2000.000</option>
                            <option value="4">Rp.2.000.000 - Rp.5.000.000</option>
                            <option value="4">Rp.5.000.000 - Rp.10.000.000</option>
                            <option value="4">Lebih besar dari Rp.10.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" onclick="cariNamaTempat(2)"><i class="fa fa-search"></i> </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="input-group mb-md">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' id="s_kecamatan">
                        <optgroup label="Kecamatan">
                            <option value="Biringkanaya">Biringkanaya</option>
                            <option value="Bontoala">Bontoala</option>
                            <option value="Makassar">Makassar</option>
                            <option value="Mamajang">Mamajang</option>
                            <option value="Manggala">Manggala</option>
                            <option value="Mariso">Mariso</option>
                            <option value="Panakkukang">Panakkukang</option>
                            <option value="Rappocini">Rappocini</option>
                            <option value="Tallo">Tallo</option>
                            <option value="Tamalanrea">Tamalanrea</option>
                            <option value="Tamalate">Tamalate</option>
                            <option value="Ujung-Pandang">Ujung Pandang</option>
                            <option value="Ujung-Tanah">Ujung Tanah</option>
                            <option value="Wajo">Wajo</option>
                        </optgroup>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" onclick="cariNamaTempat(3)"><i class="fa fa-search"></i> </button>
                </div>
            </div>
            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-10">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                        <input type="text" data-plugin-datepicker data-plugin-options='{ "multidate": true }' class="form-control" id="s_tanggal">
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" onclick="cariNamaTempat(4)"><i class="fa fa-search"></i> </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary" onclick="pencarianData()"> <i class="fa fa-search"></i> Cari</button>
                </div>
            </div>
            </blockquote>
        </div>
        <div class="col-md-8"><span id="isiValue">
            <div class="row">
                <?php for($i=0;$i<count($data);$i++){
                    if($i%3==0){?>
                        </div>
                        <div class="row" style="margin-top: 25px;">
                    <?php } ?>
                <div class="col-md-4">
                    <span class="product-thumb-info">
                        <a href="shop-product-sidebar.html">
                            <span class="product-thumb-info-image">
                                <img alt="" class="img-responsive" src="<?=base_url()?>assets/images/tempat/dp/<?=$data[$i]['gambar_dp']?>">
                            </span>
                        </a>
                        <span class="product-thumb-info-content">
                            <a href="shop-product-sidebar.html">
                                <h4><?=$data[$i]['nama_tempat']?></h4>
                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-6" style="margin-top: -30px">
                                        <a href="<?=$data[$i]['link_detail']?>"><button type="button" class="btn btn-default mr-xs mb-sm">Detail</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="shop price" style="margin-bottom: -20px">
                                            <div title="Rated 5.00 out of 5" class="star-rating">
                                                <span style="width:100%"><strong class="rating">5.00</strong>out of 5</span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </span>
                    </span>
                </div>
                <?php } ?>
            </div>
            </span>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12">
                    <div id="portfolioLoadMoreLoader" class="portfolio-load-more-loader">
                        <div class="bounce-loader">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>

                    <button id="portfolioLoadMore" type="button" onclick="ambildata()" class="btn btn-3d btn-default btn-lg btn-block font-size-xs text-uppercase outline-none p-md mb-xl">Load More...</button>
                </div>
            </div>
        </div>
    </div>
                  
</div>
<script type="text/javascript">
    var nomor=<?=$i?>;
    function ambildata() { // fungsi untuk button yang load more

        $('#portfolioLoadMore').hide();
        $('#portfolioLoadMoreLoader').show();

        // Ajax
        $.ajax({
            type:"POST",
            url: "<?=base_url().'H_balai_diklat/load_data_balai_diklat/'?>",
            data:"nomor="+nomor,
            success: function(hasil) {alert(hasil);
                $('#portfolioLoadMore').show();
                $('#portfolioLoadMoreLoader').hide();
                $('#isiValue').append(hasil);
                nomor+=3;
            }
        });

    }

    function cariNamaTempat(sPilihan){  // fungsi untuk mencari khusus nama tempat
        var sPencarian ='1';

        if(sPilihan == 1){
             sPencarian = $('#s_nama_tempat').val();
        }else if(sPilihan == 2){
             sPencarian = $('#s_harga').val();
        }else if(sPilihan == 3){
             sPencarian = $('#s_kecamatan').val();
        }else if(sPilihan == 4){
             sPencarian = $('#s_tanggal').val();
        }
        $('#isiValue').html(' ');
        $('#portfolioLoadMore').hide();
        $('#portfolioLoadMoreLoader').show();

        // Ajax
        $.ajax({
            type:"POST",
            url: "<?=base_url().'H_balai_diklat/pencarian_tempat/'?>",
            data:"hasilpencarian="+sPencarian+"&jenispost="+sPilihan,
            success: function(hasil) {
                $('#portfolioLoadMore').show();
                $('#portfolioLoadMoreLoader').hide();
                $('#isiValue').append(hasil);
            }
        });
    }

    // function pencarianData(){
    //     var sNamaTempat = $('#s_nama_tempat').val();
    //     var sHarga      = $('#s_harga').val();
    //     var sKecamatan  = $('#s_kecamatan').val();
    //     var sTanggal    = $('#s_tanggal').val();

    //     $('#portfolioLoadMoreLoader').show();

    //     $.ajax({
    //         type:"POST",
    //         url: "<?=base_url().'H_balai_diklat/load_search_balai_diklat'?>",
    //         data:   "sNamaTempat="  +sNamaTempat+
    //                 "&sHarga="      +sHarga+
    //                 "&sKecamatan="  +sKecamatan+
    //                 "&sTanggal="    +sTanggal,

    //         success: function(hasil) {
    //             alert(hasil);
    //             // $('#isiValue').html('');
    //         }
    //     });
    // }
</script>
