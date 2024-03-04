
<div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                    <h5>Tambah Kategori</h5>
                  <form method="post">
                  <?php
                    if(isset($_POST['submit'])){
                      $kategori = $_POST['kategori'];
                      $query = mysqli_query($koneksi, "INSERT INTO kategoribuku(namakategori) values('$kategori')");

                      if($query){
                        echo '<script> alert("Tambah Data Berhasil"); </script>';
                      }else{
                        echo '<script> alert("Tambah Data Berhasil"); </script>';
                      }
                    }
                  ?>

                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Nama Kategori</label>
                      <input type="text" class="form-control" name="kategori" placeholder="Nama Kategori...">
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