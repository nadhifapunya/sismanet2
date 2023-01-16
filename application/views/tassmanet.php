    <!--Main-->
    <section class="page-section bg-light">
    	<div class="container-xl p-3 d-flex justify-content-center">
    		<div class="card p-0 mt-5 w-75" style="border-radius: 15px;">
    			<h1 class="section-heading text-uppercase text-center mt-5">Lapor Pelanggaran Siswa</h1>
    			<br>
    			<div class="container ps-5 pe-5">
    				<div class="col-lg-5 mx-auto p-2">
    					<form action="tassmanet/pilih" method="POST">
    						<div class="text-left">Tingkatan :</div>
    						<select class="form-select" id="tingkatan" name="tingkatan" required>
    							<option>Pilih Angkatan</option>
    							<option value="3">Kelas 12</option>
    							<option value="2">Kelas 11</option>
    							<option value="1">Kelas 10</option>
    						</select><br>
    						<div class="text-left">Jurusan :</div>
    						<select class="form-select" id="jurusan" onchange="populate(this.id, 'kelas')" required>
    							<option value="">Pilih Jurusan</option>
    							<option value="IPA">IPA</option>
    							<option value="IPS">IPS</option>
    							<option value="BAHASA">BAHASA</option>
    						</select><br>
    						<div class="text-left">Kelas :</div>
    						<select class="form-select" name="kelas" id="kelas" required>
    							<option>Pilih Kelas</option>
    						</select><br>
    						<input type="submit" class="btn btn-secondary">
    					</form>
    				</div>
    			</div>
    			<br><br>
    		</div>
    	</div>
    </section>
    <script src="assets/js/baru.js"></script>
    <script>
window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || 
                         ( typeof window.performance != "undefined" && 
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
    </script>
    </body>


    </html>
