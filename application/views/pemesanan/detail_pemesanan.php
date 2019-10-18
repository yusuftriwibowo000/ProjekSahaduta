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
						echo form_open_multipart(base_url('Pemesanan/detail_pemesanan'));
						?>
						<div class="col-md-3">						
							<div class="form-group">
								<label for="no_rm">No.RM</label>
								<input type="hidden" name="id" value="<?php echo $tb_pemesanan->id_pemesanan ?>">
								<input type="text" name="no_rm" value="<?php echo $tb_pemesanan->no_rm ?>" class="form-control <?php echo form_error('no_rm') ? 'is-invalid' : '' ?>" placeholder="No.RM" readonly>
								<div class="invalid-feedback">
									<?php echo form_error('no_rm') ?>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="nama_pegawai">Nama Pasien</label>
								<input type="text" name="nama_pasien" class="form-control <?php echo form_error('nama_pegawai') ? 'is-invalid' : '' ?>" value="<?php echo $tb_pemesanan->nama_pasien ?>" placeholder="Nama Pegawai" readonly>
								<div class="invalid-feedback">
									<?php echo form_error('nama_pegawai') ?>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="no_antrian">Nomor Antrian</label>
								<input type="text" name="no_antrian" value="<?php echo $tb_pemesanan->no_antrian ?>" class="form-control <?php echo form_error('no_antrian') ? 'is-invalid' : '' ?>" placeholder="Nomor Antrian" readonly>
								<div class="invalid-feedback">
									<?php echo form_error('no_antrian') ?>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label for="kode_icdx">Kode Penyakit</label>
								<input type="text" id="kode_icdx" value="<?php echo set_value('kode_icdx') ?>" name="kode_icdx" class="form-control <?php echo form_error('kode_icdx') ? 'is-invalid' : '' ?>" placeholder="Kode Penyakit" autofocus>
								<div class="invalid-feedback">
									<?php echo form_error('kode_icdx') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="nama_penyakit">Nama Penyakit</label>
								<input type="text" name="penyakit" placeholder="Nama Penyakit" class="form-control" readonly>
								<div class="invalid-feedback">
									<?php echo form_error('nama_penyakit') ?>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
                                <label for="keadaan_keluar">Keadaan Keluar</label>
                                <select class="form-control" name="keadaan_keluar">
                                        <option>Silahkan Pilih</option>
                                        <option>Pulang</option>
                                        <option>Rawat Inap</option>
                                        <option>Rujuk</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="prognosa">Prognosa</label>
                                <select class="form-control" name="prognosa">
                                		<option>Silahkan Pilih</option>
                                        <option>Sembuh</option>
                                        <option>Baik</option>
                                        <option>Buruk</option>
                                        <option>Tidak Tentu/Cenderung Sembuh</option>
                                        <option>Tidak Tentu atau Cenderung Sembuh/Baik</option>
                                </select>
                            </div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label for="pengobatan">Pengobatan</label>
								<textarea name="pengobatan" class="form-control <?php echo form_error('pengobatan') ? 'is-invalid' : '' ?>" placeholder="pengobatan"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('pengobatan') ?>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label for="tindakan">Tindakan</label>
								<textarea name="tindakan" class="form-control <?php echo form_error('tindakan') ? 'is-invalid' : '' ?>" placeholder="Tindakan"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('tindakan') ?>
								</div>
							</div>
						</div>
						<div class="col-md-10">
							<label>Status Pemesanan</label><br>
							<input type="radio" name="status_pemesanan" value="Tidak Aktif"<?php echo ($tb_pemesanan->status_pemesanan == 'Tidak Aktif' ? ' checked' : ''); ?>> Belum Dilayani
							<input style="margin-left: 80px" type="radio" name="status_pemesanan" value="Aktif"<?php echo ($tb_pemesanan->status_pemesanan == 'Aktif' ? ' checked' : ''); ?>> Sudah Dilayani
							<br>
                            <input style="float: right;" type="submit" class="btn btn-primary" value="Simpan">				
						</div>
						<script type="text/javascript" src="<?php echo base_url()?>vendors/jquery/dist/jquery.js"></script>
						<?php
						echo form_close();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>