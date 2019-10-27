<!doctype html>
<html class="no-js" lang="zxx">

<head>
<?php $this->load->view('modul template user/head komentar'); ?>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
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
                    <li ><a href="<?= base_url('UPemesanan'); ?>">Pemesanan</a></li>
                    <li class="active"><a href="<?= base_url('UKomentar'); ?>">Komentar</a></li>
                </ul>
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
    
    <div class="ssite-section bg-primary" id="about-section">
        <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                  <div class="block-heading-1">
                    <span>Get In Touch</span>
                    <h2>Contact Us</h2>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                  <form action="#" method="post">
                    <div class="form-group row">
                      <div class="col-md-6 mb-4 mb-lg-0">
                        <input type="text" class="form-control" placeholder="First name">
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First name">
                      </div>
                    </div>
      
                    <div class="form-group row">
                      <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Email address">
                      </div>
                    </div>
      
                    <div class="form-group row">
                      <div class="col-md-12">
                        <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6 ml-auto">
                        <input type="submit" class="btn btn-block btn-danger text-white py-3 px-5" value="Send Message">
                      </div>
                    </div>
                  </form>
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
    <?php $this->load->view('modul template user/js'); ?>

</html>
