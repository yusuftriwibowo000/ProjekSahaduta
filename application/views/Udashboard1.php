<!doctype html>
<html class="no-js" lang="zxx">

<head>
<?php $this->load->view('modul template user/head'); ?>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
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
                <div class="collapse navbar-collapse" id="primary_menu">
                    <ul class="nav navbar-nav mainmenu">
                        <li class="active"><a href="#home_page">Home</a></li>
                        <li><a href="#Pelayanan">Pelayanan</a></li>
                        <li><a href="#contact_page">Hubungi Kami</a></li>
                        <li><a href="<?= base_url('ULogin'); ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->
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
    <div class="subscribe-area section-padding" id="Pelayanan">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="col-xs-12">
                        <article class="post-single sticky">
                            <figure class="post-media">
                                <img src="images/in.jpg" alt="">
                            </figure>
                            <div class="post-body">
                                <h4 class="dark-color">Pesan Antrian Online</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                                <a href="single.html" class="read-more">View Article</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="images/blog-1.jpg" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags"><a href="#"></a></div>
                                <div class="post-date"></div>
                            </div>
                            <h4 class="dark-color">Poliklinik Pelayanan</h4>
                            <div class="post-tags" >Dalam Klinik Sahaduta terdapat beberapa poli yaitu: Poli KIA/KB, Poli Gigi, & Poli Umum.</div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="images/blog-2.jpg" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags"><a href="#"></a></div>
                                <div class="post-date"></div>
                            </div>
                            <h4 class="dark-color">Unit Gawat Darurat (UGD)</h4>
                            <div class="post-tags">Kami juga memiliki unit Gawat Darurat (UGD) yang selalu buka 24 jam untuk melayani pasien       </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="images/blog-3.jpg" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags"><a href="#"></a></div>
                                <div class="post-date"></div>
                            </div>
                            <h4 class="dark-color">Laboratorium</h4>
                            <div class="post-tags">Kami juga memiliki Laboratorium yang digunakan untuk mengecek semua jenis penyakit</div>
                        </div>
                    </article>
                </div>
            </div>
        <!--Google map-->
            <div class="row">
                <div class="card">
                    <div class="col-xs-12">
                    <div id="map-container-google-2" class="map-container-2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.3984488470373!2d113.44672278862998!3d-8.16255013019553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd68ba14c6748df%3A0xefce644ba8776187!2sKlinik%20Pratama%20Rawat%20Jalan%20Sahaduta!5e0!3m2!1sid!2sid!4v1570503030192!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    </div>
                </div>
            </div>
        <!--Google Maps-->
        </div>
    </div>
    <!-- About-Area -->
    <!-- Button trigger modal -->
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
    
    <!--Vendor-JS-->
    <?php $this->load->view('modul template user/js'); ?>
</body>

</html>

