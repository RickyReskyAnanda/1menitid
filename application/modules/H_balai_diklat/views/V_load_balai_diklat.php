<?php 
if (count($data)>0) {?>
    <div class="row" style="margin-top: 25px;">
<?php }
for($i=0;$i<count($data) ;$i++){ ?>
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
<?php if($i+1%3==0){?>
</div>
<div class="row" style="margin-top: 25px;">
<?php } }
if (count($data)>0) {?>
    </div>
<?php }?>
