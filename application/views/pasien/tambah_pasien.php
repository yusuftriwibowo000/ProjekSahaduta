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
			            echo validation_errors('<div class="alert alert-warning">', '</div>');
			            //error
			            if (($this->session->flashdata('error'))) {
			              echo '<div class="alert alert-warning">';
			              echo $this->session->flashdata('error');
			              echo '</div>';
			            }
			            ?>

				        <div class="col-sm-12">
				          <a style="float: right;" href="<?= base_url('Pasien') ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
				        </div>		      
						<?php
						echo form_open_multipart(base_url('Pasien/add'));
						?>
						<div class="col-md-6">
							<div class="form-group">
								<label for="password">Password <span class="status lemah">lemah</span> </label>
								<input type="password" name="password" value="<?= set_value('password')?>" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" placeholder="Password" autofocus id="password">
								<small class="text-danger"><?= form_error('password'); ?></small>
							</div>
							<div class="form-group">
								<label for="nama_pasien">Nama Pasien</label>
								<input type="text" autocomplete="off" name="nama_pasien" value="<?= set_value('nama_pasien')?>" class="form-control <?php echo form_error('nama_pasien') ? 'is-invalid' : '' ?>" placeholder="Nama Pasien">
								<small class="text-danger"><?= form_error('nama_pasien'); ?></small>
							</div>
							<div class="form-group">
								<label for="tgl_lahir">Tanggal Lahir</label>
								<input type="text" autocomplete="off" name="tgl_lahir" value="<?= set_value('tgl_lahir')?>" class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid' : '' ?>" placeholder="Tanggal Lahir" id="lahir">
								<small class="text-danger"><?= form_error('tgl_lahir'); ?></small>
							</div>
							<div class="form-group">
								<label for="umur">Umur</label>
								<input type="text" name="umur" value="<?= set_value('umur')?>" class="form-control <?php echo form_error('umur') ? 'is-invalid' : '' ?>" placeholder="Umur" id="usia" readonly>
								<small class="text-danger"><?= form_error('umur'); ?></small>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" name="alamat" value="<?= set_value('alamat')?>" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" placeholder="Alamat">
								<small class="text-danger"><?= form_error('alamat'); ?></small>
							</div>
							<div class="form-group">
								<label for="nama_kk">Nama KK</label>
								<input type="text" name="nama_kk" value="<?= set_value('nama_kk')?>" class="form-control <?php echo form_error('nama_kk') ? 'is-invalid' : '' ?>" placeholder="Nama KK">
								<small class="text-danger"><?= form_error('nama_kk'); ?></small>
							</div>
							<div class="form-group">
								<label for="id_agama">Agama</label>
                                <select class="form-control" id="id_agama" name="id_agama">
                                	<option selected disabled>Silahkan Pilih</option>
                                    <?php foreach ($tb_agama as $rows) : ?>
                                        <option value="<?= $rows->id_agama; ?>">
                                        	<?= $rows->agama; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
								<small class="text-danger"><?= form_error('id_agama'); ?></small>
							</div>
						</div>
						<div class="col-md-6">
						<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
						<script type="text/javascript" src="<?php echo base_url()?>vendors/jquery/dist/jquery.js"></script>					
							<div class="form-group">
								<label for="id_pendidikan">Pendidikan</label>
                                <select class="form-control" id="id_pendidikan" name="id_pendidikan">
                                	<option selected disabled>Silahkan Pilih</option>
                                    <?php foreach ($tb_pendidikan as $rows) : ?>
                                        <option value="<?= $rows->id_pendidikan; ?>"><?= $rows->pendidikan; ?></option>
                                    <?php endforeach; ?>
                                </select>
								<small class="text-danger"><?= form_error('id_pendidikan'); ?></small>
							</div>
							<div class="form-group">
								<label for="id_pekerjaan">Pekerjaan</label>
                                <select class="form-control" id="id_pekerjaan" name="id_pekerjaan">
                                	<option selected disabled>Silahkan Pilih</option>
                                    <?php foreach ($tb_pekerjaan as $rows) : ?>
                                        <option value="<?= $rows->id_pekerjaan; ?>"><?= $rows->pekerjaan; ?></option>
                                    <?php endforeach; ?>
                                </select>
								<small class="text-danger"><?= form_error('id_pekerjaan'); ?></small>
							</div>
							<div class="form-group">
								<label for="id_jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="id_jenis_kelamin" name="id_jenis_kelamin">
                                	<option selected disabled>Silahkan Pilih</option>
                                    <?php foreach ($tb_jenis_kelamin as $rows) : ?>
                                        <option value="<?= $rows->id_jenis_kelamin; ?>"><?= $rows->jenis_kelamin; ?></option>
                                    <?php endforeach; ?>
                                </select>
								<small class="text-danger"><?= form_error('id_jenis_kelamin'); ?></small>
							</div>
							<div class="form-group">
								<label for="no_hp">Nomor HP</label>
								<input type="text" name="no_hp" value="<?= set_value('no_hp')?>" class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" placeholder="Nomor HP"
								 id="nomor-hp">
								<small class="text-danger"><?= form_error('no_hp'); ?></small>
							</div>
							<div class="form-group">
								<label for="NIK">NIK</label>
								<input type="text" name="NIK" value="<?= set_value('NIK')?>" class="form-control <?php echo form_error('NIK') ? 'is-invalid' : '' ?>" placeholder="NIK">
								<small class="text-danger"><?= form_error('NIK'); ?></small>
								<br>
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