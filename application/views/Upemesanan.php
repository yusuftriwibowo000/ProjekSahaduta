<!doctype html>
<html class="no-js" lang="zxx">

<head>
<?php $this->load->view('modul template user/head pemesanan'); ?>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">

    <!-- Preloader-content -->
    <div class="preloader">
        <span><img src="images/logo.jpg"></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li><a href="<?= base_url('UDashboard2'); ?>">Home</a></li>
                    <li class="active"><a href="<?= base_url('UPemesanan'); ?>">Pemesanan</a></li>
                    <li><a href="<?= base_url('UKomentar'); ?>">Komentar</a></li>
                </ul>
            </div>
        </div>
        <!-- <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
        
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="" alt="">
                                    <span class=" fa fa-angle-down"></span>
                              
                                <img src="" alt="">   
                                <span class=" fa fa-angle-down"></span>
                          
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="">Ganti Password</a></li>
                                <li><a href=""><i class=" fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> -->
    </nav>
    <!--MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-7">
                    <div class="space-80 hidden-xs"></div>
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s">SAHADUTA KLINIK</h1>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                    </div>
                    <div class="space-20"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Home-Area-End -->
    <div class="site-section bg-primary" id="about-section">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 mb-4 col-lg-0 col-lg-2">
                                <br>
                            </div>
                            <div class="col-md-6 mb-4 col-lg-0 col-lg-2">
                            <div class="block-counter-1">
                                <span class="number"><span data-number="15">42</span></span>
                                <span class="caption">Jumlah Antrian</span>
                            </div>
                            </div>
                            <div class="col-md-6 mb-4 col-lg-0 col-lg-1">
                                    <br>
                            </div>
                            <div class="col-md-6 mb-4 col-lg-0 col-lg-2">
                            <div class="block-counter-1">
                                <span class="number"><span data-number="392">25</span></span>
                                <span class="caption">Antrian Sekarang</span>
                            </div>
                            </div>
                            <div class="col-md-6 mb-4 col-lg-0 col-lg-1">
                                    <br>
                            </div>
                            <div class="col-md-6 mb-4 col-lg-0 col-lg-2">
                                <div class="block-counter-1">
                                    <span class="number"><span data-number="392">32</span></span>
                                    <span class="caption">Antrian Anda</span>
                                </div>
                                </div>
                            <div class="col-md-6 mb-4 col-lg-0 col-lg-2">
                                    <br>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="section-padding">
            <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                                        <br>
                                </div>
                                <div class="col-md-6 mb-4 col-lg-0 col-lg-6">
                                        <button type="submit" class="btn btn-block btn-success text-white py-5 px-7" 
                                        value="" data-toggle="modal" 
                                        data-target="#exampleModal">PESAN ANTRIAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                                        <br>
                                </div>
                                <div class="col-md-6 mb-4 col-lg-0 col-lg-6">
                                    <div class="alert alert-danger" role="alert">
                                            <h5><b>Mohon Untuk Diperhatikan!</b></h5>
                                            <br>
                                            <h5>1. Sebelum mendaftar pastikan anda masuk dengan akun yang valid</h5>
                                            <h5>2. Perhatikan baik-baik nomor antrian anda</h5>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                                            <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- About-Area -->
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Hubungi Kami</h5>
                            <h3 class="dark-color">Find Us By Bellow Details</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p>JL PB. Sudirman, No. 13-14 <br /> Kec. Tanggul, Kabupaten Jember, Jawa Timur</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p>Telepon <br />(0336) 442588 </p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p>sahaduta@gmail.com <br /> www.sahadutaklinik.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
