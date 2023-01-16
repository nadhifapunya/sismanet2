
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="title text-left text-black"><h5 class="display-6 fw-bolder">Edit Berita</h5></div>
                    
        <!-- bagian konten -->
          <div class="container">
            <div class="row mt-3">
                    <div class="container mt-1 mb-4">
            
                    <form action="<?= base_url().'admin/ngedit_berita'?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id_berita"
							value="<?php echo $berita['0']['id_berita'];?>"></input>

							<input type="hidden" name="foto_lama"
                   			 value="<?php echo $berita['0']['foto'];?>"></input>

                            <input type="text" name="Judul" class="form-control" placeholder="Judul berita" value="<?php echo $berita['0']['judul'];?>"/>

                            <br>

                            <input id="ckeditor" name="berita" class="form-control" placeholder="Isi berita" value="<?php echo $berita['0']['isi_berita'];?>"></input>
							<br/>
							
                            
							<img src="<?= base_url().'assets/img/berita/'.$berita['0']['foto']; ?>" alt="" height=auto width=100>
                    		<br>
                    		<br>
                            <input type="file" name="foto"><br>
                    		<br>
                    		<br>
							
                            <button class="btn btn-outline-dark" type="submit">Simpan Edit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        </section>
                        
    </body>
</html>
