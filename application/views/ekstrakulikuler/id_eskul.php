	<link rel="stylesheet" href="../assets/css/ciput.css">
	
	<section class="page-section bg-light">
		<div class="container p-3">
			<div class="card p-0 mt-5" style="border-radius: 15px;">
				<a href="<?= base_url('eskul') ?>" class="ms-5 mt-5"><button class="btn btn-smanet text-white">Kembali </button></a>
				<h1 class="section-heading text-uppercase text-center ms-5 mt-5"><?= $eskul['0']['nama_eskul'] ?></h1>
				<p align="center" style="font-style: italic"> "Bersama Membangun Sekolah Negeri 7 Sengkang"</p>
				<br>
				<div class="container-cc align-self-center" align="text-center">
					<div class="card">
						<img src="<?= base_url(), 'assets/img/logos/' . $eskul['0']['foto'] ?>">
					</div>
			</div>
					<br>
				<div class="container p-5">
					<p align="center">
						<?= $eskul['0']['tentang_eskul'] ?>
					</p>
				</div>
				<br><br>
			</div>

				<br><br>

				<div class="container-fluid pt-5 pb-5 bg-light">
       				 <div class="container text-center">
            			<h2 class="display-3" id="staff"> Our Member</h2>
						<div class="row">
							<div class="col-md-3 profile text-center">
								<div class="img-box">
									<img src="<?= base_url(), 'assets/img/logos/' . $eskul['0']['foto'] ?>" class="img-responsive">
								</div>
								<h2>Azwar</h2>
								<h3>Pembina</h3>
								<p style="font-style: italic">Masa Jabatan</p>
								<p> 1995 - ..</p>
							</div>
							<div class="col-md-3 profile text-center">
								<div class="img-box">
									<img src="image/said.jpg" class="img-responsive">
								</div>
								<h2>Azwar</h2>
								<h3>Ketua Umum</h3>
								<p style="font-style: italic">Masa Jabatan</p>
								<p> 2022 - 2024</p>
							</div>
							<div class="col-md-3 profile text-center">
								<div class="img-box">
									<img src="image/said.jpg" class="img-responsive">
								</div>
								<h2>Azwar</h2>
								<h3>Wakil Ketua Umum</h3>
								<p style="font-style: italic">Masa Jabatan</p>
								<p> 2022 - 2024</p>
							</div>
							<div class="col-md-3 profile text-center">
								<div class="img-box">
									<img src="image/said.jpg" class="img-responsive">
								</div>
								<h2>Azwar</h2>
								<h3>Sekertaris</h3>
								<p style="font-style: italic">Masa Jabatan</p>
								<p> 2022 - 2024</p>
							</div>
							<div class="col-md-3 profile text-center">
								<div class="img-box">
									<img src="image/said.jpg" class="img-responsive">
								</div>
								<h2>Azwar</h2>
								<h3>Bendahara</h3>
								<p style="font-style: italic">Masa Jabatan</p>
								<p> 2022 - 2024</p>
							</div>
						</div>
            	<div class="row pt-4 gx-3 gy-3">


		</div>
		</body>

		</html>