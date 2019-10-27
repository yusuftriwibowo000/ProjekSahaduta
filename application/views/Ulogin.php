<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sahaduta Klinik</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/jpg" href="<?php echo base_url() ?>builduser/images/logo.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendoruser/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>builduser/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>builduser/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendoruser/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendoruser/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendoruser/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendoruser/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendoruser/main.css">
<!--===============================================================================================-->
    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>build/css/custom.min.css" rel="stylesheet">
</head>

<body class="Ulogin">
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-110 p-b-30">
				<form action="<?= base_url('ULogin'); ?>" method="post" class="login100-form validate-form" >
					<div class="login100-form-avatar">
						<img src="images/logo.jpg">
					</div>

					<span class="login100-form-title p-t-10 p-b-45">
						Sahaduta Klinik
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "no_rm is required">
                        <?= $this->session->flashdata('message'); ?>
						<input class="input100" required="" type="text" name="no_rm" placeholder="No_rm" value="<?= set_value('no_rm'); ?>">
                        <?= form_error('no_rm', '<small class = "text-danger pl-3">', '</small>'); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<?= form_error('password', '<small class = "text-danger pl-3">', '</small>'); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" name="Ulogin">
							Login
						</button>
					</div>
                
				</form>
                <br>
                <br>
                <br>
                <br>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->	
    <script src="<?= base_url(); ?>vendoruser/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>vendoruser/bootstrap/js/popper.js"></script>
	<script src="<?= base_url(); ?>vendoruser/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>vendoruser/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>vendoruser/main.js"></script>

</body>
</html>