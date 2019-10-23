<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2><?= $title; ?></h2>
							<div class="clearfix"></div>
						</div>
						<?php
						echo validation_errors('<div class="alert alert-warning">','</div>');

						//error
						if(isset($error)){
							echo '<div class="alert alert-warning">';
							echo $error;
							echo '</div>';
						}

						echo form_open_multipart(base_url('Pegawai/add'));
						?>
						<div class="col-md-5">
						<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
						<link rel="stylesheet" type="text/css" href="build/custom.css">
						<script type="text/javascript" src="<?php echo base_url()?>vendors/jquery/dist/jquery.js"></script>
						
							<div class="form-group">
								<label for="NIK">NIK</label>
								<input type="text" name="NIK" class="form-control <?php echo form_error('NIK') ? 'is-invalid' : '' ?>" placeholder="NIK" autofocus>
								<div class="invalid-feedback">
									<?php echo form_error('NIK') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="nama_pegawai">Nama Pegawai</label>
								<input type="text" name="nama_pegawai" class="form-control <?php echo form_error('nama_pegawai') ? 'is-invalid' : '' ?>" placeholder="Nama Pegawai">
								<div class="invalid-feedback">
									<?php echo form_error('nama_pegawai') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" name="alamat" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" placeholder="Alamat">
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="no_hp">Nomor HP</label>
								<input type="text" name="no_hp" class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" placeholder="Nomor HP">
								<div class="invalid-feedback">
									<?php echo form_error('no_hp') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="email">Username</label>
								<input type="text" name="username" class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" placeholder="Username">
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<script type="text/javascript">
									$(document).ready(function(){
										$('#password').keyup(function(index) {

											//dapatkan karakter di field password
											let karakter = $(this).val();

											//hitung karakter dari field password
											let totalkarakter =karakter.length;

											if(totalkarakter >= 6){
												$('.status').removeClass('lemah'); //hapus class lemah

												$('.status').text('kuat'); //string menjadi kuat
												$('.status').addClass('kuat'); //tambah class sukses
											}else{
												$('.status').removeClass('kuat'); //hapus class kuat

												$('.status').text('lemah'); //string menjadi lemah
												$('.status').addClass('lemah'); //tambah class sukses
											}
										});
									});
								</script>
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" placeholder="Password" 
								id="password">
								<div class="invalid-feedback">
								<label class="informasi">
									password anda <span class="status lemah">lemah</span>
									<?php echo form_error('password') ?>
								</label>
								</div>
							</div>
							<div class="form-group">
                                <label for="id_status">Status</label>
                                <select class="form-control" id="id_status" name="id_status">
                                    <?php foreach ($tb_status as $rows) : ?>
                                        <option value="<?= $rows->id_status; ?>"><?= $rows->nama_status; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
								<label for="isactive">Akun Aktif ?</label>
								<input type="text" name="isactive" class="form-control <?php echo form_error('isactive') ? 'is-invalid' : '' ?>">
								<div class="invalid-feedback">
									<?php echo form_error('isactive') ?>
								</div>
							</div>
							 <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="filefoto" class="form-control">
                            </div><br>
                            <input type="submit" class="btn btn-primary" value="Simpan">							
						</div>
						<?php
						echo form_close();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>