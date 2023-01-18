
    <!--Main-->
    <section class="page-section bg-light">


        <div class="container-xl p-3 d-flex justify-content-center">
        <div class="card p-0 mt-5 w-75">

		
            <h1 class="section-heading text-uppercase text-center mt-5">Lapor Pelanggaran Siswa</h1>
            <br>
            <div class="container">
                <div class="col-lg-5 mx-auto p-2">
                    <form action="lapor" method="POST">
						<!-- <input type="hidden" name="nohp" value="<?= $siswa['0']['nohp_ortu'];?>"></input> -->

                        <div class="text-left">Nama :</div>
                        <select name="nis" class="form-select" >
						<option>Pilih Nama Siswa</option>
                            <?php
                                    foreach($siswa as $sw){
                                        echo '
                                        <option value="'.$sw['nis'].'">
                                        '.$sw['nama_siswa'].'
                                        </option>
                                        ';
                                    }
                                ?>
                        </select><br>
						<div class="text-left">Pelanggaran :</div>
						<select class="form-select" name="pelanggaran" onchange="enableSelect(this)" required>
                            <option>Pilih Pelanggaran</option>
                            <option value="Merokok di lingkungan Sekolah">Merokok</option>
                            <option value="Bolos">Bolos</option>
                            <option value="Alpha">Alpha</option>
                            <option value="Terlambat">Terlambat</option>	
                            <option value="1">lainnya</option>
                        </select>
						<br>
						<input name="input1" type="text" id="lainnya" class="form-control d-none" placeholder="Masukkan Pelanggaran"> </input>
                        <br>
                        <input type="submit" class="btn btn-secondary">
						<br><br><br>
						<script type="text/javascript">
							function enableSelect(answer) {
								// console.log(answer.value);
								if(answer.value == 1){
									document.getElementById('lainnya').classList.remove('d-none');
								}else{
									document.getElementById('lainnya').classList.add('d-none');
								}
							};
						</script>
                    </form>
                </div>
            </div>
        </div>
		</div>
    </section>
    <script src="<?= base_url(); ?>/assets/js/baru.js"></script>

</body>


</html>
