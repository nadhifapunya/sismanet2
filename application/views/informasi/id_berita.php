	<section class="page-section bg-light">
		<div class="container p-3">
			<div class="card p-0 mt-5" style="border-radius: 15px;">
				<a href="<?= base_url('informasi') ?>" class="ms-5 mt-5"><button class="btn btn-smanet text-white">Kembali </button></a>
				<h1 class="section-heading text-uppercase text-center ms-5 mt-5"><?= $berita['0']['judul'] ?></h1>
				<br>
				<div class="d-flex justify-content-center">
					<img class="card-img-top d-block fit-cover w-50" height="500" src="<?= base_url(), 'assets/img/berita/' . $berita['0']['foto'] ?>">
				</div>
				<br>
				<div class="container p-5">
					<p>
						<?= $berita['0']['isi_berita'] ?>
					</p>
				</div>
				<br><br>
			</div>

		</div>
		</body>

		</html>
