<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
	<title><?= $title; ?></title>

	<!-- Latest compiled and minified CSS -->
	<!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->

	<!-- Latest compiled JavaScript -->
	<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.js"></script>

	<!-- Custom CSS -->
	<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/top.css" rel="stylesheet">


</head>

<body>
	<!-- Menu -->
	<nav class="navbar navbar-expand-lg <?= $bg; ?> navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="#page-top"><img src="<?= base_url(); ?>assets/img/logo.png" alt="SMAN 7 WAJO" style="width: 250px; height: auto" /></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars ms-1"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>home">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>informasi">Informasi</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>eskul">Ekstrakurikuler</a></li>
					<?php
					if (!empty($this->session->userdata['data_user']['0']['nip'])) {
						echo '<li class="nav-item"><a class="nav-link" href="'. base_url().'tassmanet">Tassmanet</a></li>';
					}

                    if (!empty($this->session->userdata['data_user']['0']['nip'])) {
	                    echo '
						<li class="nav-item"><a class="nav-link" href="' . base_url() . 'admin">Portal Admin</a></li>
						';
					}

					if (!empty($this->session->userdata['data_user']['0']['nis'])) {
	                    echo '
						<li class="nav-item"><a class="nav-link" href="' . base_url() . 'biodata">Biodata</a></li>
						';
					}
					
					if (!empty($this->session->userdata['data_user'])) {
						echo '
						<li class="nav-item"><button class="btn btn-smanet text-white" data-bs-toggle="modal" data-bs-target="#logoutModal">
						LOGOUT</button>
						</li>
							';
					} else {
						echo '<li class="nav-item"> <button class="btn btn-smanet text-white" data-bs-toggle="modal" data-bs-target="#myModal">
						LOGIN
						</button></li>';
					}
					// 	echo "<pre>";
					// 	print_r($_SESSION);
					// 	echo "</pre>";
					// die;
					?>


					<!-- The Modal -->
					<div class="modal fade" id="myModal">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Silahkan Login :</h4>
									<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<form action="<?= site_url(); ?>login/aksi_login" method="post">
										<div class="d-flex justify-content-center">
											<img src="<?= site_url() ?>assets/img/logos/	Sman7.png" style="width: 200px; align-content: center;">
										</div>
										<br><br>
										<div class="form-group first">
											<label for="username">NIP/NIS</label>
											<input type="text" class="form-control" name="username">

										</div>
										<div class="form-group last mb-4">
											<label for="password">Password</label>
											<input type="password" class="form-control" name="password">

										</div>

										<div class="d-flex mb-5 align-items-center">
											<label class="control control--checkbox mb-0"><span class="caption">Remember
													me</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
											</label>
										</div>

										<input type="submit" class="btn btn-secondary"></input>
								</div>
								</form>
							</div>

						</div>
					</div>

					<!-- Logout Modal-->
					<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
									<button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">Tekan tombol Logout berikut untuk keluar</div>
								<div class="modal-footer">
									<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
									<a class="btn btn-smanet" href="<?= site_url(); ?>login/logout">Logout</a>
								</div>
							</div>
						</div>
					</div>
			</div>
			</ul>
		</div>
		</div>
	</nav> 	
