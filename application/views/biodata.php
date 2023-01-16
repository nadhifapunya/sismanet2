<?php
$data = $this->session->userdata['data_user']['0'];
$angkatan = $data['angkatan'];
$date = getdate();
$datenow = date_create($date['year'] . '-' . $date['mon'] . '-' . $date['mday']);
$date2 =  date_create($angkatan . '-6-6');
$angkatan = date_diff($date2, $datenow);
if ($angkatan->format("%y") == 3) {
	$tahun = 12;
} else if ($angkatan->format("%y") == 2) {
	$tahun = 11;
} else if ($angkatan->format("%y") == 1) {
	$tahun = 10;
} else {
	$tahun = "Alumni";
}
// if $angkatan == 
?>
<section class="py-5">
	<div class="container px-4 px-lg-5 my-5">
		<br><br>
		<div class="card">
			<div class="title text-center text-black">
				<h1 class="display-4 fw-bolder">Biodata</h1>
			</div>

			<div class="row gx-4 gx-lg-5 d-flex justify-content-center">
				<div class="col-md-4"><img class="card-img-top mb-5 mb-md-0" src="<?= base_url() . 'assets/img/siswa/' . $data['foto'] ?>" style="width: 200px;" /></div>
				<div class="col-md-6">
					<div class="fs-5 mb-5">
						<span class="text-decoration-line-through"></span>
					</div>
					<div>
						<ul>
							
							<li>Nama : <?= $data['nama_siswa'] ?> </li>
							<li>Nis/Nisn : <?= $data['nis'] ?> </li>
							<li>Kelas : <?= $tahun . ' ' . $data['kelas'] ?></li>
							<li>Alamat : <?= $data['alamat'] ?></li>
							<!-- <li>Organisasi           : Technosis Group (Ketua), Rohis (Anggota), Pramuka(kord. pubdok)</li> -->
							<li>Angkatan Masuk : <?= $data['angkatan']; ?> </li>
						</ul>
					</div>
					<!-- <p class="lead">Anda Akan dapat menikmati layanan kami secara online, seperti :
						<li>Melihat nilai Rapor,</li>
						<li>Melihat Absensi,</li>
						<li>Melihat Nilai Ujian.</li><br>
						<div class="text-center"><a class="btn btn-smanet text-white" href="#">Edit Profile</a></div> -->
					</div>
				</div>
			</div>
		</div>
</section>

</html>
