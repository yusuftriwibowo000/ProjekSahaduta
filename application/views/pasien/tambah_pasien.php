<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2><?=$title ?></h2>
							<div class="clearfix"></div>
						</div>
						<?php
						echo form_open_multipart(base_url('Pasien/add'));
						?>
						<div class="col-md-6">
							<div class="form-group">
								<label for="password">Password <span class="status lemah">lemah</span> </label>
								<input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" placeholder="Password" autofocus id="password">
								<div class="invalid-feedback">
								<?php echo form_error('password') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="nama_pasien">Nama Pasien</label>
								<input type="text" autocomplete="off" name="nama_pasien" class="form-control <?php echo form_error('nama_pasien') ? 'is-invalid' : '' ?>" placeholder="Nama Pasien">
								<div class="invalid-feedback">
									<?php echo form_error('nama_pasien') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="tgl_lahir">Tanggal Lahir</label>
								<input type="text" autocomplete="off" name="tgl_lahir" class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid' : '' ?>" placeholder="Tanggal Lahir" id="lahir">
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="umur">Umur</label>
								<input type="text" name="umur" class="form-control <?php echo form_error('umur') ? 'is-invalid' : '' ?>" placeholder="Umur" id="usia" readonly>
								<div class="invalid-feedback">
									<?php echo form_error('umur') ?>
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
								<label for="nama_kk">Nama KK</label>
								<input type="text" name="nama_kk" class="form-control <?php echo form_error('nama_kk') ? 'is-invalid' : '' ?>" placeholder="Nama KK">
								<div class="invalid-feedback">
									<?php echo form_error('nama_kk') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="id_agama">Agama</label>
                                <select class="form-control" id="id_agama" name="id_agama">
                                	<option>Silahkan Pilih</option>
                                    <?php foreach ($tb_agama as $rows) : ?>
                                        <option value="<?= $rows->id_agama; ?>"><?= $rows->agama; ?></option>
                                    <?php endforeach; ?>
                                </select>
								<div class="invalid-feedback">
									<?php echo form_error('id_agama') ?>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
						<script type="text/javascript" src="<?php echo base_url()?>vendors/jquery/dist/jquery.js"></script>					
							<div class="form-group">
								<label for="id_pendidikan">Pendidikan</label>
                                <select class="form-control" id="id_pendidikan" name="id_pendidikan">
                                	<option>Silahkan Pilih</option>
                                    <?php foreach ($tb_pendidikan as $rows) : ?>
                                        <option value="<?= $rows->id_pendidikan; ?>"><?= $rows->pendidikan; ?></option>
                                    <?php endforeach; ?>
                                </select>
								<div class="invalid-feedback">
									<?php echo form_error('id_pendidikan') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="id_pekerjaan">Pekerjaan</label>
                                <select class="form-control" id="id_pekerjaan" name="id_pekerjaan">
                                	<option>Silahkan Pilih</option>
                                    <?php foreach ($tb_pekerjaan as $rows) : ?>
                                        <option value="<?= $rows->id_pekerjaan; ?>"><?= $rows->pekerjaan; ?></option>
                                    <?php endforeach; ?>
                                </select>
								<div class="invalid-feedback">
									<?php echo form_error('id_pekerjaan') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="id_jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="id_jenis_kelamin" name="id_jenis_kelamin">
                                	<option>Silahkan Pilih</option>
                                    <?php foreach ($tb_jenis_kelamin as $rows) : ?>
                                        <option value="<?= $rows->id_jenis_kelamin; ?>"><?= $rows->jenis_kelamin; ?></option>
                                    <?php endforeach; ?>
                                </select>
								<div class="invalid-feedback">
									<?php echo form_error('id_jenis_kelamin') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="no_hp">Nomor HP</label>
								<input type="text" name="no_hp" class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" placeholder="Nomor HP"
								 id="nomor-hp">
								<div class="invalid-feedback">
									<?php echo form_error('no_hp') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="NIK">NIK</label>
								<input type="text" name="NIK" class="form-control <?php echo form_error('NIK') ? 'is-invalid' : '' ?>" placeholder="NIK">
								<div class="invalid-feedback">
									<?php echo form_error('NIK') ?>
								</div><br>
								<input type="submit" class="btn btn-primary" value="Simpan">
							</div>
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