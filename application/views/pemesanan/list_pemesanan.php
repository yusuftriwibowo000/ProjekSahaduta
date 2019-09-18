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
                  <input type="text" name="antrianNow" class="form-control" value="<?php echo set_value('antrianNow', $antrianNow) ?>" placeholder="Nomor Antrian" readonly>
                  <h2>Yang Terpanggil</h2>
                  <h1 id="counter"></h1>
                </div>
              </div>
            </div>
            <div class="x_content">
              <div class="pricing_footer">
                <button class="btn btn-success" title="Tambah Antrean" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-plus"></i>
                Ambil Antrian
                </button>
                <a href="<?php echo base_url('Pemesanan/nomorAntrian') ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-right"></i>
                Selanjutnya
                </a>
                <button class="btn btn-primary" title="Reset" title="Reset" id="reset"><i class="fa fa-arrow-circle-left"></i>
                Reset
                </button>
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




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Tambah Antrian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        echo validation_errors('<div class="alert alert-warning">', '</div>');
        //error
        if (($this->session->flashdata('error'))) {
          echo '<div class="alert alert-warning">';
          echo $this->session->flashdata('error');
          echo '</div>';
        }

        echo form_open_multipart(base_url('Pemesanan'));
        ?>

        <div class="col-md-12">
          <div class="form-group text-left">
            <label>No. RM</label>
            <input type="text" id="no_rm" name="no_rm" class="form-control" value="<?php echo set_value('no_rm') ?>" placeholder="Nomor RM" autofocus>
          </div>
          <div class="form-group text-left">
            <label>Nama Pasien</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Pasien" readonly>
          </div>
          <div class="form-group text-left">
            <label>No Antrian</label>
            <input type="text" name="no_antrian" class="form-control" value="<?php echo set_value('no_antrian', $no_antrian) ?>" placeholder="Nomor Antrian" readonly>
          </div>
          <!-- <div class="form-group text-left"> -->
            <!-- <label>Nama Pegawai</label> -->
            <input type="hidden" name="id_pegawai" class="form-control" value="<?php echo $user["id_pegawai"]; ?>" placeholder="Id Pegawai" readonly>
          <!-- </div> -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url()?>vendors/jquery/dist/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#no_rm').on('input',function(){
                 
                var no_rm=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('Pemesanan/get_pasien')?>",
                    dataType : "JSON",
                    data : {no_rm: no_rm},
                    cache:false,
                    success: function(data){
                        $.each(data,function(no_rm, nama_pasien){
                            $('[name="nama"]').val(data.nama_pasien);                             
                        });
                         
                    }
                });
                return false;
           });
 
        });
    </script>
<?php echo form_close(); ?>