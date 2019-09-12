<div class="right_col" role="main">
    <div class="">


        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>


        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <p><a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i>Tambah <?= $title; ?></a></p>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="column-title">No </th>
                                <th class="column-title">No RM </th>
                                <th class="column-title">Nama Pasien</th>
                                <th class="column-title">Kritik </th>
                                <th class="column-title">Saran </th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tb_komentar as $row) :
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row->no_rm; ?></td>
                                    <td></td>
                                    <td><?php echo $row->Kritik; ?></td>
                                    <td><?php echo $row->saran; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('komentar/delete/' . $row->id_komentar) ?>" class="btn btn-danger btn-sm" title="Hapus" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $no++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tambah Modal -->
        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="judulModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="judulModal">Tambah Komentar</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() . 'komentar/add'; ?>" method="post">
                            <?php validation_errors(); ?>
                            <div class="form-group">
                                <label for="no_rm">No RM</label>
                                <input type="text" class="form-control" id="no_rm" name="no_rm" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="nama_pasien">Nama Pasien</label>
                                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
                            </div>
                            <div class="form-group">
                                <label for="kritik">Kritik</label>
                                <input type="text" class="form-control" id="kritik" name="kritik">
                            </div>
                            <div class="form-group">
                                <label for="saran">Saran</label>
                                <input type="text" class="form-control" id="saran" name="saran">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="add" class="btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>