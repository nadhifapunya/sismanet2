	<section class="page-section bg-light">
		<div class="container p-3">
			<div class="card p-0 mt-5" style="border-radius: 15px;">
				<a href="<?= base_url('eskul') ?>" class="ms-5 mt-5"><button class="btn btn-smanet text-white">Kembali </button></a>
				<h1 class="section-heading text-uppercase text-center ms-5 mt-5"><?= $eskul['0']['nama_eskul'] ?></h1>
				<br>
				<div class="d-flex justify-content-center">
					<img class="card-img-top d-block fit-cover w-50" height="500" src="<?= base_url(), 'assets/img/logos/' . $eskul['0']['foto'] ?>">
				</div>
				<br>
				<div class="container p-5">
					<p>
						<?= $eskul['0']['tentang_eskul'] ?>
					</p>
				</div>
				<br><br>
			</div>

		</div>
		</body>

		</html>