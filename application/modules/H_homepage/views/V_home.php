

            <div role="main" class="main">
                
                <section class="section section-default">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-8">
                            <h4>Video <strong>Terbaru</strong></h4>
                            <div class="owl-carousel owl-theme show-nav-title" data-plugin-options='{"items": 1, "margin": 10, "loop": true, "nav": true, "dots": false}'>
                                <?php for ($i=0; $i < count($terbaru); $i++) { ?>
                                <div>
                                    <span class="thumb-info thumb-info-centered-icons">
                                        <span class="thumb-info-wrapper">
                                            <img src="<?=base_url()?>assets/xyz/<?=$terbaru[$i]['gambar']?>" class="img-responsive img-rounded" alt="">
                                            <span class="thumb-info-action">
                                                <a href="<?=$terbaru[$i]['link_detail']?>">
                                                    <span class="thumb-info-action-icon thumb-info-action-icon-primary" title="gambar"><i class="fa fa-play-circle"></i></span>
                                                </a>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4>Video <strong>Populer</strong></h4>
                            <ul class="simple-post-list">
                                <?php for ($i=0; $i < count($populer); $i++) { ?>
                                    
                                    <li>
                                        <div class="col-md-7">
                                            <span class="thumb-info thumb-info-centered-icons">
                                                <span class="thumb-info-wrapper">
                                                    <img alt="" class="img-responsive" src="<?=base_url()?>assets/xyz/thumb/<?=$populer[$i]['gambar']?>">
                                                    <span class="thumb-info-action">
                                                        <a href="<?=$populer[$i]['link_detail']?>">
                                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary" title="gambar"><i class="fa fa-play-circle"></i></span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="post-info">
                                                <a href="<?=$populer[$i]['link_detail']?>"><?=ucfirst($populer[$i]['judul_berita'])?></a>
                                                <div class="post-meta">
                                                    <i class="fa fa-eye"></i> <?=$populer[$i]['pengunjung']?>x dilihat
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Video Lainnya</h4>
                            <div class="owl-carousel owl-theme stage-margin" data-plugin-options='{"items": 4, "margin": 10, "loop": true, "nav": true, "dots": false, "stagePadding": 40, "autoplay": true, "autoplayTimeout": 3000}'>
                            <?php for ($i=0; $i < count($lainnya); $i++) { ?>

                                <div>
                                    <span class="thumb-info thumb-info-centered-icons">
                                        <span class="thumb-info-wrapper">
                                            <img src="<?=base_url()?>assets/xyz/thumb/<?=$lainnya[$i]['gambar']?>" class="img-responsive img-rounded" alt="">
                                            <span class="thumb-info-action">
                                                <a href="<?=$lainnya[$i]['link_detail']?>">
                                                    <span class="thumb-info-action-icon thumb-info-action-icon-primary" title="gambar"><i class="fa fa-play-circle"></i></span>
                                                </a>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
