
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="title text-left text-black"><h5 class="display-6 fw-bolder">Edit agenda</h5></div>
                    
        <!-- bagian konten -->
          <div class="container">
            <div class="row mt-3">
                    <div class="container mt-1 mb-4">
            
                    <form action="<?= base_url().'admin/ngedit_agenda'?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id_agenda"
							value="<?php echo $agenda['0']['id_agenda'];?>"></input>

							<input type="hidden" name="foto_lama"
                   			 value="<?php echo $agenda['0']['foto'];?>"></input>

                            <input type="text" name="Judul" class="form-control" placeholder="Judul agenda" value="<?php echo $agenda['0']['judul'];?>"/>

                            <br>

                            <input id="ckeditor" name="agenda" class="form-control" placeholder="Isi agenda" value="<?php echo $agenda['0']['isi_agenda'];?>"></input>
							<br/>
							
                            
							<img src="<?= base_url().'assets/img/agenda/'.$agenda['0']['foto']; ?>" alt="" height=auto width=100>
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
