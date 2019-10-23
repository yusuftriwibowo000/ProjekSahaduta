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
                    <p><a href="<?= base_url('pegawai/add'); ?>" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Tambah Pegawai</a></p>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="column-title">No </th>
                                <th class="column-title">NIK </th>
                                <th class="column-title">Nama Pegawai </th>
                                <th class="column-title">alamat </th>
                                <th class="column-title">No HP </th>
                                <th class="column-title">Username </th>
                                <th class="column-title">Status </th>
                                <!-- <th class="column-title">Akun Aktif </th> -->
                                <th class="column-title">Foto </th>
                                <th class="column-title">Terakhir Login </th>
                                <th class="column-title">Terakhir Update </th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tb_pegawai as $row) :
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row->NIK; ?></td>
                                    <td><?php echo $row->nama_pegawai; ?></td>
                                    <td><?php echo $row->alamat; ?></td>
                                    <td><?php echo $row->no_hp; ?></td>
                                    <td><?php echo $row->username; ?></td>
                                    <td><?= $row->nama_status; ?></td>
                                    <!-- <td>
                                        <?php if ($row->isactive == 1) : ?>
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" />
                                            </div>
                                        <?php else : ?>
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" disabled="disabled" />
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                    </td> -->
                                    <td>
                                        <img src="<?php echo base_url('build/foto/'.$row->foto) ?>" width="64" />
                                    </td>
                                    <td><?= $row->last_login; ?></td>
                                    <td><?= $row->last_update; ?></td>
                                    <td>
                                        <a href="<?= base_url('pegawai/edit_pegawai/'.$row->id_pegawai) ?>" class="btn btn-primary btn-sm" title="Edit" data-toggle="modal"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url('pegawai/delete/' . $row->id_pegawai) ?>" class="btn btn-danger btn-sm" title="Hapus" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i></a>

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
        <!-- <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="judulModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="judulModal">Tambah Pegawai</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() . 'Pegawai/add'; ?>" method="post">
                            <?php validation_errors(); ?>
                            <div class="form-group">
                                <label for="NIK">NIK</label>
                                <input type="text" class="form-control" id="NIK" name="NIK">
                            </div>
                            <div class="form-group">
                                <label for="nama_pegawai">Nama Pegawai</label>
                                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="id_status">Status</label>
                                <select class="form-control" id="id_status" name="id_status">
                                    <?php foreach ($tb_status as $rows) : ?>
                                        <option value="<?= $rows->id_status; ?>"><?= $rows->nama_status; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="isactive">Akun Aktif ?</label>
                                <input type="text" class="form-control" id="isactive" name="isactive">
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="filefoto" class="form-control">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="add" class="btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Edit Pegawai Modal -->
        <!-- <?php
        foreach ($tb_pegawai as $row) :
            ?>
            <div class="modal fade" id="editModal<?php echo $row->id_pegawai; ?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="judulModal">Edit Pegawai</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url() . 'pegawai/edit_pegawai'; ?>" method="post">
                                <?php validation_errors(); ?>
                                <div class="form-group">
                                    <input class="form-control" id="id_pegawai" name="id_pegawai" value="<?php echo $row->id_pegawai; ?>" readonly type="hidden">
                                </div>
                                <div class="form-group">
                                    <label for="NIK">NIK</label>
                                    <input type="text" class="form-control" id="NIK" name="NIK" value="<?php echo $row->NIK; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pegawai">Nama Pegawai</label>
                                    <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?php echo $row->nama_pegawai; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row->alamat; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $row->no_hp; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $row->email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="id_status">Status</label>
                                    <select class="form-control" id="id_status" name="id_status">
                                        <?php foreach ($tb_status as $rows) : ?>
                                            <option value="<?= $rows->id_status; ?>" <?php if ($row->id_status == $rows->id_status) {
                                                                                            echo "selected";
                                                                                        } ?>>
                                                <?= $rows->nama_status; ?></option> <?php endforeach; ?> </select> </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="add" class="btn btn-primary">Update Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?> -->