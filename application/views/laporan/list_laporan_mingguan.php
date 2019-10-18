<div class="right_col" role="main">
  <div class="">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><?php echo $title ?></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No.RM</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Nama KK</th>
                <th>Agama</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Jenis Kelamin</th>
                <th>No.HP</th>
                <th>NIK</th>
                <th>Tanggal Pemesanan</th>
                <th>Pegawai</th>
                <!-- <th width="200">Action</th> -->
              </tr>
            </thead>
              <tbody>
                <?php foreach ($laporan_mingguan as $row) : ?>
                <tr class="odd gradeX">
                  <th scope="row"><?php echo $row->no_rm; ?></th>
                  <td><?php echo $row->nama_pasien; ?></td>
                  <td><?php echo $row->tgl_lahir; ?></td>
                  <td><?php echo $row->umur; ?></td>
                  <td><?php echo $row->alamat; ?></td>
                  <td><?php echo $row->nama_kk; ?></td>
                  <td><?php echo $row->agama; ?></td>
                  <td><?php echo $row->pendidikan; ?></td>
                  <td><?php echo $row->pekerjaan; ?></td>
                  <td><?php echo $row->jenis_kelamin; ?></td>
                  <td><?php echo $row->no_hp; ?></td>
                  <td><?php echo $row->NIK; ?></td>
                  <td><?php echo $row->tgl_pemesanan; ?></td>
                  <td><?php echo $row->nama_pegawai; ?></td>
                  <!-- <td>
                    <a href="<?php echo base_url('pasien/delete/' . $row->no_rm) ?>" class="btn btn-danger btn-sm" title="Hapus" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i></a>
                  </td> -->
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>