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

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="column-title">Judul </th>
                                <th class="column-title">Akses </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($tb_sub_menu as $row) :
                                ?>
                                <tr>
                                    <td><?php echo $row->judul; ?></td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" <?php if ($row->id_menu == 2) {
                                                                                                echo "checked";
                                                                                            } ?> data-submenu="<?= $row->id_submenu; ?>" data-menu="<?= $row->id_menu; ?>">

                                        </div>
                                    </td>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <script>
            $('.form-check-input').on('click', function() {
                const idSubmenu = $(this).data('submenu');
                const idMenu = $(this).data('menu');
                document.location.href = <?= base_url("aksesadmin"); ?>
                $.ajax({
                    url: "<?= base_url("aksesadmin/changeaccess"); ?>",
                    type: 'post',
                    data: {
                        id_submenu: idSubmenu,
                        id_menu: idMenu
                    },
                    success: function() {
                        document.location.href = <?= base_url("aksesadmin"); ?>
                    }

                });

            });
        </script>