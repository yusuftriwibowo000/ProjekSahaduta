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
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Diagnosa ICDX</th>
                <th>Pengobatan</th>
                <th>Tindakan</th>
                <th>Keadaan Keluar</th>
                <th>Prognosa</th>
                <th>Tanggal Periksa</th>
                <th>Pegawai</th>
              </tr>
            </thead>
              <tbody>
                <?php
                  foreach ($laporan_penanganan_pasien as $row) :
                ?>
                <tr class="odd gradeX">
                  <th scope="row"><?php echo $row->no_rm; ?></th>
                  <td><?php echo $row->nama_pasien; ?></td>
                  <td><?php echo $row->jenis_kelamin; ?></td>
                  <td><?php echo $row->umur; ?></td>
                  <td><?php echo $row->nama_icdx; ?></td>
                  <td><?php echo $row->pengobatan; ?></td>
                  <td><?php echo $row->tindakan; ?></td>
                  <td><?php echo $row->keadaan_keluar; ?></td>
                  <td><?php echo $row->prognosa; ?></td>
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