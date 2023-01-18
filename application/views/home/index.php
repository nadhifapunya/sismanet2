
    <!-- Masthead -->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">Berkarakter, Berwawasan, Beriman</div>
        </div>
    </header>
    <!-- Masthead -->

    <!-- Visi -->
    <section class="page-section" id="visi">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Visi sekolah :</h2>
                <br>
                <h2 class="section-subheading text-uppercase text-bg-smanet">"TERWUJUDNYA WARGA SEKOLAH YANG UNGGUL
                    DALAM BERIMAN,
                    BERILMU DAN BERBUDAYA SERTA BERWAWASAN LINGKUNGAN HIDUP"</h2>
                <br>
                <!-- <h2 class="section-heading text-uppercase">Misi SMAN 7 WAJO</h2>
                    <br> -->
            </div>
        </div>
    </section>



    <!-- Kepsek -->
    <section class="page-section bg-smanet" id="kepsek">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 search-course-right welcoming-gap ">
                    <img src="assets/img/kepsek2.png" alt="Kepsek SMAN 7 WAJO" style="width: 100%;">
                </div>
                <div class="col-md-6 search-course-left">
                    <h1 class="text-white">
                        Assalamualaikum Wr. Wb
                    </h1>
                    <p class="text-white">
                        Segala puji hanya untuk Allah SWT dan shalawat serta salam semoga tercurah atas nabi yang
                        terakhir, yaitu nabi kita Muhammad SAW,
                        begitu pula atas keluarga dan para sahabatnya.
                    </p>
                    <p class="text-white">
                        Kami mengucapkan selamat datang di Website kami UPT
                        SMA NEGERI 7 WAJO yang saya tujukan untuk seluruh unsur pimpinan, guru, pegawai dan siswa serta
                        khalayak umum
                        guna dapat mengakses seluruh informasi tentang segala profil, prestasi, aktifitas/kegiatan serta
                        data guru dan siswa sekolah. Website ini sebagai wujud rasa keinginan kami untuk menjadikan
                        sekolah yang senantiasa mengikuti perkembangan teknologi dewasa ini
                    </p>
                    <p class="text-white">
                        Terima kasih semoga Allah ‘Azza Wa Jalla menyertai doa kita semua, amin.
                        <br>
                        <br>
                        Wassalamualaikum Wr. Wb
                    </p>
                    <p class="welcoming-text" style="font-weight: bold">
                    </p>
                    <h4 class="text-white">HJ. ANDI FATMAWATI, S.Pd, M.Si</h4>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Kepsek -->

    <!-- Jurusan -->
    <section class="page-section bg-light" id="jurusan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Jurusan</h2>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/Jurusan/ipa.png" alt="Jurusan IPA SMANET" />
                        <h4>IPA</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/Jurusan/ips.png" alt="Jurusan IPS SMANET" />
                        <h4>IPS</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/Jurusan/bahasa.png"
                            alt="JURUSAN BAHASA SMANET" />
                        <h4>BAHASA</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jurusan -->

    <!-- Berita  -->
    <section class="page-section bg-smanet">
        <div class="container p-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="title text-center text-white">
                        <h1 class="mb-10">Berita Terbaru</h1>
                        <p>Ikuti terus informasi dan berita-berita terbaru tentang <b>SMA NEGERI 7 WAJO</b>.</p>
                    </div>
                </div>
            </div>
            
 			<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
 				<?php
					foreach ($berita as $br) {
						echo '
				<div class="col">
					<div class="card"><img class="card-img-top d-block fit-cover img-fluid" width="317" src="' . base_url() . 'assets/img/berita/' . $br['foto'] . '">
						<div class="card-body p-4">
							<p class="text-primary card-text mb-0">Berita</p>
							<h4 class="card-title">' . $br['judul'] . '</h4>
							<p class="card-text">' . substr($br['isi_berita'], 0, 80) . '...<br><a href="informasi/berita?id_berita=' . $br['id_berita'] . '" class="text-black">
							Baca Selengkapnya</a>' . '</p>
							
							<div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="'.base_url('assets/img/admin/').$br['afoto'].'">
								<div>
									<p class="fw-bold mb-0">' . $br['nama_guru'] . '</p>
									<p class="text-muted mb-0">' . $br['date'] . '</p>
								</div>
							</div>
						</div>
					</div>
				
					</div>';
				}
				?>
 			</div>
		</div>

        </div>
    </section>
