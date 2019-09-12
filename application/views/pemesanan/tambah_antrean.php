<button class="btn btn-success" title="Tambah Antrean" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-plus"></i>
  Ambil Antrian
</button>
<button class="btn btn-primary" title="Selanjutnya" title="Next" id="add"><i class="fa fa-arrow-circle-right"></i>
  Selanjutnya
</button>
<button class="btn btn-primary" title="Reset" title="Reset" id="reset"><i class="fa fa-arrow-circle-left"></i>
  Reset
</button>

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