<?php $id_status = $this->session->userdata('id_status');
$queryMenu = "SELECT `tb_menu`.`id_menu`,`menu` 
                FROM `tb_menu` JOIN `tb_acces_menu` 
                ON `tb_menu`.`id_menu` = `tb_acces_menu`.`id_menu`
                WHERE `tb_acces_menu`.`id_status` = $id_status
                ORDER BY `tb_acces_menu`.id_menu ASC
                ";
$menu = $this->db->query($queryMenu)->result_array();
?>
<!-- Looping Menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <ul class="nav side-menu">
    <?php foreach ($menu as $m) : ?>
      <?php
      $menuId = $m['id_menu'];
      $querySubMenu = "SELECT * FROM tb_sub_menu
                 WHERE id_menu = $menuId
                 AND is_active = 1";
      $subMenu = $this->db->query($querySubMenu)->result_array();

      ?>
      <?php foreach ($subMenu as $sm) : ?>

        <?php if ($sm['judul'] != 'Laporan') : ?>

          <li><a href="<?= base_url($sm['url']); ?>"><i class="<?= $sm['icon']; ?>"></i> <?= $sm['judul']; ?><span class="fa fa-chevron"></span> </a>
          </li>

        <?php else : ?>

          <li><a><i class="<?= $sm['icon']; ?>"></i> <?= $sm['judul']; ?><span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?= base_url('laporan/laporan_semua') ?>">Laporan Semua</a></li>
              <li><a href="<?= base_url('laporan/laporan_harian') ?>">Laporan Harian</a></li>
              <li><a href="<?= base_url('laporan/laporan_mingguan') ?>">Laporan Mingguan</a></li>
              <li><a href="<?= base_url('laporan/laporan_bulanan') ?>">Laporan Bulanan</a></li>
              <li><a href="<?= base_url('laporan/laporan_tahunan') ?>">Laporan Tahunan</a></li>
            </ul>
          </li>

        <?php endif; ?>



      <?php endforeach; ?>
    <?php endforeach; ?>
  </ul>
</div>
<!-- <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>

      </li>
      <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron"></span></a>
      </li>
    </ul>
  </div>
</div> -->