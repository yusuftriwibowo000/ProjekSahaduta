<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2><?=$title?></h2>
              <div class="clearfix"></div>
            </div>

            <?php if ($this->session->flashdata('success')) : ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $this->session->flashdata('success'); ?>
              </div>
            <?php endif; ?>

            <?php
            echo validation_errors('<div class="alert alert-warning">', '</div>');
            //error
            if (($this->session->flashdata('error'))) {
              echo '<div class="alert alert-warning">';
              echo $this->session->flashdata('error');
              echo '</div>';
            }
            ?>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="pricing">
                <div class="title">
                  <h2>Jumlah Antrian</h2>
                  <h1><?php echo $antri ?></h1>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="pricing">
                <div class="title">
                  <h2>Yang Terpanggil</h2>
                  <h1 id="counter"></h1>
                </div>
              </div>
            </div>
            <div class="x_content">
              <div class="pricing_footer">
                <?php include('tambah_antrean.php'); ?>
              </div>
            </div>


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nomor Antrean</th>
                        <th>Nomor RM</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Waktu Pemesanan</th>
                        <th width="200">Action</th>
                      </tr>
                    </thead>
                    <?php
                    foreach ($tb_pemesanan as $row) :
                      ?>
                      <tbody>
                        <tr class="odd gradeX">
                          <th scope="row"><?php echo $row->no_antrian; ?></th>
                          <td><?php echo $row->no_rm; ?></td>
                          <td><?php echo $row->nama_pasien; ?></td>
                          <td><?php echo $row->jenis_kelamin; ?></td>
                          <td><?php echo $row->waktu_pemesanan; ?></td>
                          <td>
                            <!-- <a href="<?php echo base_url('dashboard/edit/' . $row->id_pemesanan) ?>" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></a> -->
                            <a href="<?php echo base_url('pemesanan/delete/' . $row->id_pemesanan) ?>" class="btn btn-danger btn-sm" title="Hapus" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>