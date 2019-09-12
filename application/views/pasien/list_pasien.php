<div class="right_col" role="main">
  <div class="">


    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <p><a href="<?= base_url('pasien/add'); ?>" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Tambah <?= $title; ?></a></p>

      <div class="clearfix"></div>
        </div> <?php if ($this->session->flashdata('success')) : ?>
         <div class="alert alert-success alert-dismissible" role="alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>
        <div class="x_content">
          <table id="datatable-fixed-header" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th class="column-title">No </th>
                <th class="column-title">No.RM </th>
                <th class="column-title">NIK </th>
                <th class="column-title">Nama Pasien </th>
                <th class="column-title">Tanggal Lahir </th>
                <th class="column-title">Alamat </th>
                <th class="column-title">Nama KK </th>
                <th class="column-title">Agama </th>
                <th class="column-title">Pendidikan </th>
                <th class="column-title">Pekerjaan </th>
                <th class="column-title">Jenis Kelamin </th>
                <th class="column-title">No HP </th>
                <th class="column-title no-link last"><span class="nobr">Action</span>
                </th>
              </tr>
            </thead>

            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($tb_pasien as $row) : ?>
                <tr>
                  <td class=" "><?= $no; ?></td>
                  <td class=" "><?php echo $row->no_rm; ?></td>
                  <td class=" "><?php echo $row->NIK; ?></td>
                  <td class=" "><?php echo $row->nama_pasien; ?></td>
                  <td class=" "><?php echo $row->tgl_lahir; ?></td>
                  <td class=" "><?php echo $row->alamat; ?></td>
                  <td class=" "><?php echo $row->nama_kk; ?></td>
                  <td class=" "><?php echo $row->agama; ?></td>
                  <td class=" "><?php echo $row->pendidikan; ?></td>
                  <td class=" "><?php echo $row->pekerjaan; ?></td>
                  <td class=" "><?php echo $row->jenis_kelamin; ?></td>
                  <td class=" "><?php echo $row->no_hp; ?></td>
                  <td>
                    <a href="<?php echo base_url('pasien/edit/' . $row->no_rm) ?>" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url('pasien/delete/' . $row->no_rm) ?>" class="btn btn-danger btn-sm" title="Hapus" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>