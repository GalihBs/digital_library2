
<div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                    <h6>UBAH DATA</h6>
                  <form method="post">
                  <?php
                    $id = $_GET['id'];
                    if(isset($_POST['submit'])){
                      $kategori = $_POST['kategori'];
                      $query = mysqli_query($koneksi, "UPDATE kategoribuku SET namakategori='$kategori' WHERE KategoriID = $id");

                      if($query){
                        echo '<script> alert("Ubah Data Berhasil"); </script>';
                      }else{
                        echo '<script> alert("Ubah Data BGagal"); </script>';
                      }
                    }
                    
                    $query = mysqli_query($koneksi, "SELECT * FROM kategoribuku where KategoriID = $id");
                    $data = mysqli_fetch_array($query);
                  ?>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Nama Kategori</label>
                      <input type="text" class="form-control" name="kategori" value="<?php echo $data['NamaKategori']; ?>">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary mr-2">Reset</button>
                    <a href="?page=pages/page-kategori/kategori" class="btn btn-danger">Cancel</a>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>