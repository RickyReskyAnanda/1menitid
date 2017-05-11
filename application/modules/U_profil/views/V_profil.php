<div class="container">
	<div class="row">
		<div class="row" style="border-top-color:#E95314;margin-top: 20px">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="featured-box featured-box-primary align-left mt-xlg" style="height: 1250px;">
					<div class="box-content">
						<h2 style="color: #12968D; text-align: center;">Silahkan Lengkapi Berkas Anda</h2>
						<div class="recent-posts mb-xl">
							<form class="form-horizontal form-bordered" method="post" action="<?=base_url('U_profil/update_data_anggota')?>" enctype="multipart/form-data">
								<input type="hidden" name="fp_lama" value="<?=$user['foto_profil']?>">
								<input type="hidden" name="fk_lama" value="<?=$user['foto_ktp']?>">
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Foto Profil</label>
									<div class="col-md-9">
										<img width="300px" src="<?=base_url()?>assets/images/user/<?=$user['foto_profil']?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Masukkan Foto Anda</label>
									<div class="col-md-9">
										<input type="file" name="foto" class="form-control">
										*input foto untuk mengganti foto profil
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Nama</label>
									<div class="col-md-9">
										<input type="text" name="nama_user" class="form-control" value="<?=$user['nama_user']?>" placeholder="Masukkan Nama Lengkap Anda">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Tempat lahir</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="tempat_lahir_user" value="<?=$user['tempat_lahir_user']?>" placeholder="Masukkan Nama Lengkap Anda">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Tanggal lahir</label>
									<div class="col-md-9">
										<input type="date" class="form-control" name="tgl_lahir_user" value="<?=$user['tgl_lahir_user']?>" placeholder="Masukkan Nama Lengkap Anda">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">E-Mail</label>
									<div class="col-md-9">
										<input type="email" class="form-control" name="email_user" value="<?=$user['email_user']?>" placeholder="Masukkan E-mail Anda">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Password</label>
									<div class="col-md-9">
										<input type="password" name="pass" value="-" class="form-control" placeholder="Masukkan Password Anda">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Jenis Kelamin</label>
									<div class="col-md-9">
										<select class="form-control" name="jk_user" required>
											<option value="laki-laki" <?php if($user['jk_user']=='laki-laki')echo "selected";?>>Laki - Laki</option>
											<option value="perempuan" <?php if($user['jk_user']=='perempuan')echo "selected";?>>Perempuan</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Alamat</label>
									<div class="col-md-9">
										<textarea class="form-control" name="alamat_user" maxlength="255"><?=$user['alamat_user']?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">No.Hp</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="no_hp_user" value="<?=$user['no_hp_user']?>" id="inputDefault">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Pekerjaan</label>
									<div class="col-md-9">
										<input type="text" name="pekerjaan_user" class="form-control" value="<?=$user['pekerjaan_user']?>" id="inputDefault">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Foto Ktp</label>
									<div class="col-md-9">
										<img width="300px" src="<?=base_url()?>assets/images/user/<?=$user['foto_ktp']?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Masukkan Foto Ktp Anda</label>
									<div class="col-md-9">
										<input type="file" class="form-control" name="fotoktp">
										*input untuk mengganti foto
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<button  type="submit" class="btn btn-primary pull-right"><i class="fa fa-send-o"></i>Simpan</button>													
										<button style="margin-right: 10px" type="submit" class="btn btn-danger pull-right"><i class="fa fa-refresh"></i> Reset</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>				
</div>