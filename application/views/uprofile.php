<!doctype html>
<html class="no-js" lang="zxx">

<head>
<?php $this->load->view('modul template user/head pemesanan'); ?>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">

    <!-- Preloader-content -->
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img src="images/logo.jpg" alt="Logo"></a>
                    
                </div>
                <div class="collapse navbar-collapse" class="main-nav d-none d-lg-block" id="primary_menu">
                    <ul class="nav navbar-nav mainmenu">
                        <li><a href="<?= base_url('UDashboard2'); ?>">Home</a></li>
                        <li><a href="<?= base_url('UPemesanan'); ?>">Pemesanan</a></li>
                        <li><a href="<?= base_url('Ukomentar'); ?>">Komentar</a></li>
                    
                    <ul class="nav navbar-nav navbar-right" >
                        <li class="active"><a href="#" class="nav navbar-nav mainmenu"><span class="fas fa-user-alt">&nbsp;&nbsp;<?= $user['nama_pasien']; ?></span></a>
                        </li>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--MainMenu-Area-End -->
    <!-- Home-Area -->
    
    <!-- Home-Area-End -->
    <div class="site-section bg-primary" id="about-section">
        <br>
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <article class="post-single">
                            
                                <div class="post-body" >
                                    
                                <h4 class="dark-color"><?= $user['nama_pasien']; ?></h4>
                                <div class="dark-color">Nomor Rekam Medik : <?= $user['no_rm']; ?></div>
                                <div class="dark-color">NIK&emsp;&emsp; : <?= $user['NIK']; ?></div>
                                <div class="dark-color">TTL&emsp;&emsp; : <?= $user['tgl_lahir']; ?></div>
                                <div class="dark-color">Alamat&ensp;    : <?= $user['alamat']; ?></div>
                                <div class="dark-color">No. HP&ensp;    : <?= $user['no_hp']; ?></div>
                                    
                            </div>
                        </article>
                            
                        </div>
                        <div class="col-xs-12 col-lg-8 col-md-8">
                            <article class="post-single sticky">
                                
                                <div class="dark-color" class="table-dark">
                                    <h4 class="dark-color">Riwayat Pemesanan</h4>
                                    <div class="right_col" class="table-dark" role="main">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                <div class="responsive">
                                                    <table class="table table-hover" class="table-dark">
                                                        <thead>
                                                            <tr>
                                                                <th>No.RM</th>
                                                                <th>Nama Pasien</th>
                                                                <th>Tanggal Pemesanan</th>
                                                                <th>Pegawai</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-dark">
                                                            <?php
                                                            foreach ($riwayat as $row) :
                                                            ?>
                                                            <tr class="odd gradeX">
                                                            <th scope="row"><?php echo $row->no_rm; ?></th>
                                                            <td><?php echo $row->nama_pasien; ?></td>
                                                            <td><?php echo $row->tgl_pemesanan; ?></td>
                                                            <td><?php echo $row->nama_pegawai; ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <nav class="mt-3">
                                                                </nav>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <div class="col-xs-12 col-lg-12 col-md-8">
                            <article class="post-single sticky">
                                
                                <div class="dark-color" class="table-dark">
                                    <h4 class="dark-color">Ganti Password</h4>
                                    <div class="right_col" class="table-dark" role="main">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                <div class="responsive">
                                                    <div class="x_content">
                                                        <br />
                                                        <?= $this->session->flashdata('message'); ?>
                                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" href="" method="post">
                                                            <div class="form-group">
                                                                <label for="password_lama" class="control-label col-md-3 col-sm-3 col-xs-12">Password Lama</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input class="form-control" placeholder="Enter Password Lama" name="password_lama" id="password_lama" type="password">
                                                                </div>
                                                                <?= form_error('password_lama', '<small class = "text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password_baru1" class="control-label col-md-3 col-sm-3 col-xs-12">Password Baru</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input class="form-control" placeholder="Enter Password Baru" name="password_baru1" id="password_baru1" type="password">
                                                                </div>
                                                                <?= form_error('password_baru1', '<small class = "text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password_baru2" class="control-label col-md-3 col-sm-3 col-xs-12">Konfirmasi Password Baru</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input class="form-control" placeholder="Konfirmasi Password" name="password_baru2" id="password_baru2" type="password">
                                                                </div>
                                                                <?= form_error('password_baru2', '<small class = "text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                                <a href="<?= base_url('UPemesanan'); ?>">
                                                                    <button type="submit"class="btn btn-block btn-danger text-white py-5 px-7" 
                                                                    value="">LOG OUT</button>
                                                                </a>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <nav class="mt-3">
                                                                </nav>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-xs-12 col-lg-12 col-md-8">
                            <div class="row">
                                <div class="col-md-6 mb-4 col-lg-2">
                                        <br>
                                </div>
                                <div class="col-md-6 mb-4 col-lg-8">
                                        <a href="<?= base_url('ulogin/logoutuser'); ?>">
                                            <button type="submit"class="btn btn-block btn-danger text-white py-5 px-7" 
                                            value="">LOG OUT</button>
                                        </a>
                                </div>
                                <div class="col-md-6 mb-4 col-lg-2">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- About-Area -->
    <!-- Footer-Area -->
    <!-- Page content -->
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a href="https://colorlib.com" target="_blank">ProDevis</a></span>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>
    <!-- Footer-Area-End -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">PESAN ANTRIAN
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button></h5>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                    <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 mb-4 col-lg-0 col-lg-12">
                                        <div class="alert alert-warning" role="alert">
                                                <h5><b>Perhatian!</b></h5>
                                                
                                                <h5>1. Setelah Konfirmasi nomor antrian, harap segera datang ke klinik </h5>
                                                <h5>2. Perhatikan baik-baik nomor antrian anda</h5>
                                                <h5>3. Selalu pantau nomor antrian yang berjalan/antrian sekarang</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 mb-4 col-lg-0 col-lg-12">
                                        <div class="alert alert-info" role="alert">
                                                <h5><b>Apakah anda ingin melakukan konfirmasi pemesanan antrian online?</b></h5>
                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
            <button type="button" class="btn btn-primary">KONFIRMASI</button>
            </div>
        </div>
        </div>
    </div>
    <?php $this->load->view('modul template user/js'); ?>
</body>

</html>
