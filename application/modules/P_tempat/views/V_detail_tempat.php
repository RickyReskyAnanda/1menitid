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
                <h1>Detail Tempat</h1>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-bottom: 100px; margin-top: 100px">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10}'>
                            <?php for ($i=0; $i < count($detail['gambar']); $i++) { ?>
                            <div>
                                <img alt="" height="300" class="img-responsive" src="<?=base_url()?>assets/images/tempat/<?=$detail['gambar'][$i]['nama_gambar']?>">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="summary entry-summary shop">
                            <h1 class="mb-none"><strong><?=$detail['nama_tempat']?></strong></h1>
                            <div class="review_num">
                                <span class="count" itemprop="ratingCount">2</span> reviews
                            </div>
                            <div title="Rated 5.00 out of 5" class="star-rating">
                                <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                            </div>
                            <p class="price">
                                <span class="amount"><?="Rp. ".number_format($detail['harga'],2,',','.');?>/<?=$detail['pembayaran']?></span>
                            </p>
                            <h4>With Borders</h4>
                            <ul class="list list-icons list-primary list-side-borders mt-xlg">
                                <li><i class="fa fa-check"></i> <?=$detail['luas']?> (Meter Persegi)</li>
                                <li><i class="fa fa-check"></i> <?=$detail['jam_buka'].'-'.$detail['jam_tutup']?>  </li>
                                <li><i class="fa fa-check"></i> <?=$detail['lokasi']?></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabs tabs-product">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                <a href="#productDescription" data-toggle="tab">Description</a></li>
                                            <li><a href="#productInfo" data-toggle="tab">Aditional Information</a></li>
                                            <li><a href="#productReviews" data-toggle="tab">Reviews (2)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="productDescription">
                                    <?=$detail['deskripsi_tempat']?>
                                </div>
                                <div class="tab-pane " id="productInfo">
                                    <!-- <table class="table table-striped mt-xl">
                                        <tbody>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tanggal</th>                                                
                                                <th>Jam</th>
                                                <th>Nama Pemesan</th>
                                                <th>Tanggal Pendaftaran</th>
                                                <th>Nama Kegiatan/Acara</th>
                                                <th>Jumlah Pembayaran</th>
                                                <th>Target Hadirin</th>
                                                <th>Kebutuhan</th>
                                                <th>Keterangan</th>
                                            </tr>
                                            <?php for($i=0;$i<count($pemesanan);$i++){ ?>
                                            <tr>
                                                <td><?=$i+1;?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                                <td><?=$pemesanan[$i][''];?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table> -->
                                </div>
                                <div class="tab-pane" id="productReviews">
                                    <ul class="comments">
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="" src="img/avatar-2.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
                                                        <strong>John Doe</strong>
                                                        <span class="pull-right">
                                                            <div title="Rated 5.00 out of 5" class="star-rating">
                                                                <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                                            </div>
                                                        </span>
                                                    </span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr class="tall">
                                    <h4 class="heading-primary">Add a review</h4>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <form action="" id="submitReview" method="post">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>Your name *</label>
                                                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Your email address *</label>
                                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>Review *</label>
                                                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="submit" value="Submit Review" class="btn btn-primary" data-loading-text="Loading...">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <aside class="sidebar">
                    <h5 class="heading-primary">Top Rated Products</h5>
                    <ul class="nav nav-list mb-xlg">
                                    <li><a href="#">Design (2)</a></li>
                                    <li class="active">
                                        <a href="#">Photos (4)</a>
                                        <ul>
                                            <li><a href="#">Animals</a></li>
                                            <li class="active"><a href="#">Business</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">People</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Videos (3)</a></li>
                                    <li><a href="#">Lifestyle (2)</a></li>
                                    <li><a href="#">Technology (1)</a></li>
                                </ul>
                </aside>
            </div>
        </div>
    </div>              
</div>
<div class="container">
    <div class="row">
        <h4 class="mb-md text-uppercase">Related <strong>Products</strong></h4>
            <div class="row tab-content">
                <ul class="products product-thumb-info-list" style="margin-left: -45px">
                    <li class="col-sm-2 col-xs-12 product">
                        <span class="product-thumb-info">
                            <a href="shop-product-sidebar.html">
                                <span class="product-thumb-info-image">
                                    <span class="product-thumb-info-act">
                                        <span class="product-thumb-info-act-left"><em>View</em></span>
                                        <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                    </span>
                                    <img alt="" class="img-responsive" src="<?=base_url()?>assets/img/products/product-1.jpg">
                                </span>
                            </a>
                            <span class="product-thumb-info-content">
                                <a href="shop-product-sidebar.html">
                                    <h4>Makassar</h4>
                                    <span class="price">
                                        <del><span class="amount">$325</span></del>
                                        <ins><span class="amount">$299</span></ins>
                                    </span>
                                </a>
                            </span>
                        </span>
                    </li>
                    <li class="col-sm-2 col-xs-12 product">
                        <span class="product-thumb-info">
                            <a href="shop-product-sidebar.html">
                                <span class="product-thumb-info-image">
                                    <span class="product-thumb-info-act">
                                        <span class="product-thumb-info-act-left"><em>View</em></span>
                                        <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                    </span>
                                    <img alt="" class="img-responsive" src="<?=base_url()?>assets/img/products/product-2.jpg">
                                </span>
                            </a>
                            <span class="product-thumb-info-content">
                                <a href="shop-product-sidebar.html">
                                    <h4>Bone</h4>
                                    <span class="price">
                                        <span class="amount">$72</span>
                                    </span>
                                </a>
                            </span>
                        </span>
                    </li>
                    <li class="col-sm-2 col-xs-12 product">
                        <span class="product-thumb-info">
                            <a href="shop-product-sidebar.html">
                                <span class="product-thumb-info-image">
                                    <span class="product-thumb-info-act">
                                        <span class="product-thumb-info-act-left"><em>View</em></span>
                                        <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                    </span>
                                    <img alt="" class="img-responsive" src="<?=base_url()?>assets/img/products/product-3.jpg">
                                </span>
                            </a>
                            <span class="product-thumb-info-content">
                                <a href="shop-product-sidebar.html">
                                    <h4>Sinjai</h4>
                                    <span class="price">
                                        <span class="amount">$60</span>
                                    </span>
                                </a>
                            </span>
                        </span>
                    </li>
                    <li class="col-sm-2 col-xs-12 product">
                        <span class="product-thumb-info">
                            <a href="shop-product-sidebar.html">
                                <span class="product-thumb-info-image">
                                    <span class="product-thumb-info-act">
                                        <span class="product-thumb-info-act-left"><em>View</em></span>
                                        <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                    </span>
                                    <img alt="" class="img-responsive" src="<?=base_url()?>assets/img/products/product-4.jpg">
                                </span>
                            </a>
                            <span class="product-thumb-info-content">
                                <a href="shop-product-sidebar.html">
                                    <h4>Soppeng</h4>
                                    <span class="price">
                                        <span class="amount">$199</span>
                                    </span>
                                </a>
                            </span>
                        </span>
                    </li>
                    <li class="col-sm-2 col-xs-12 product">
                        <span class="product-thumb-info">
                            <a href="shop-product-sidebar.html">
                                <span class="product-thumb-info-image">
                                    <span class="product-thumb-info-act">
                                        <span class="product-thumb-info-act-left"><em>View</em></span>
                                        <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                    </span>
                                    <img alt="" class="img-responsive" src="<?=base_url()?>assets/img/products/product-4.jpg">
                                </span>
                            </a>
                            <span class="product-thumb-info-content">
                                <a href="shop-product-sidebar.html">
                                    <h4>Soppeng</h4>
                                    <span class="price">
                                        <span class="amount">$199</span>
                                    </span>
                                </a>
                            </span>
                        </span>
                    </li>
                    <li class="col-sm-2 col-xs-12 product">
                            <span class="product-thumb-info">
                                <a href="shop-product-sidebar.html">
                                    <span class="product-thumb-info-image">
                                        <span class="product-thumb-info-act">
                                            <span class="product-thumb-info-act-left"><em>View</em></span>
                                            <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                        </span>
                                        <img alt="" class="img-responsive" src="<?=base_url()?>assets/img/products/product-4.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content">
                                    <a href="shop-product-sidebar.html">
                                        <h4>Soppeng</h4>
                                        <span class="price">
                                            <span class="amount">$199</span>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </li>
                </ul>
            </div>
    </div>              
</div>