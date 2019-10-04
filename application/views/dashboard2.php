<!DOCTYPE HTML>
<html>

<head>
	<?php $this->load->view('frontend/head'); ?>
</head>

<body>

	<div class="gtco-loader"></div>

	<div id="page">


		<div class="page-inner">

			<div id="head-top" style="position: absolute; width: 100%; top: 0; ">
				<div class="gtco-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div id="gtco-logo"><a href="index.html">SAHADUTA</a></div>
							</div>
							<div class="col-md-6 col-xs-6 social-icons">
								<ul class="gtco-social-top">
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<nav class="gtco-nav sticky-banner" role="navigation">
					<div class="gtco-container">

						<div class="row">
							<div class="col-xs-12 text-center menu-1">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="portfolio.html">Pesan Antrian</a></li>
									<li class="active"><a href="contact.html">Kontak</a></li>
									<li><a href="portfolio.html">Keluar</a></li>
								</ul>
							</div>
						</div>

					</div>
				</nav>
			</div>

			<!-- isi -->
			<?php $this->load->view($isi); ?>
			<!-- footer -->
			<?php $this->load->view('frontend/footer'); ?>
		</div>

	</div>

	<!-- GoTopUp -->
	<?php $this->load->view('frontend/gotopup'); ?>

	<!-- jQuery -->
	<?php $this->load->view('frontend/js'); ?>

</body>

</html>