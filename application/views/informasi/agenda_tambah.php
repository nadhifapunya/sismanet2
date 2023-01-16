
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="title text-left text-black"><h5 class="display-6 fw-bolder">Tambah agenda</h5></div>
                    
        <!-- bagian konten -->
          <div class="container">
            <div class="row mt-3">
                    <div class="container mt-1 mb-4">
            
                    <form action="<?= base_url().'admin/post_agenda'?>" method="post" enctype="multipart/form-data">

                            <input type="text" name="Judul" class="form-control" placeholder="Judul agenda" required/>

                            <br>

                            <textarea id="ckeditor" name="agenda" class="form-control" placeholder="Isi agenda" required></textarea><br/>
                           
							<input type="file" name="foto" accept="image/*"><br>

                            <br>

                            <button class="btn btn-outline-dark" type="submit">Post agenda</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        </section>
                        
    </body>
</html>
