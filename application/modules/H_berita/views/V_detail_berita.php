

			<div role="main" class="main">
				
				<section class="section section-default-scale-9">
					<div class="container">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<h4 class="text-light"><i class="fa fa-play"></i> <?=$berita['judul_berita']?></h4>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe frameborder="0" allowfullscreen="" src="<?=$berita['link_video']?>"></iframe>
								</div>
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
													<span class="thumb-info-action-icon thumb-info-action-icon-primary" title=""><i class="fa fa-play-circle"></i></span>
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

			