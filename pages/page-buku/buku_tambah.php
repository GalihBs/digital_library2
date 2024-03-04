
<div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                    <h5>Tambah Buku</h5>
                  <form method="post">
                  <?php
                    if(isset($_POST['submit'])){
                      $kategoriid = $_POST['kategoriid'];
                      $judul = $_POST['judul'];
                      $penulis = $_POST['penulis'];
                      $penerbit = $_POST['penerbit'];
                      $tahunterbit = $_POST['tahunterbit'];
                      $query = mysqli_query($koneksi, "INSERT INTO buku(kategoriid, judul, penulis, penerbit, tahunterbit) values('$kategoriid','$judul', '$penulis', '$penerbit', '$tahunterbit')");

                      if($query){
                        echo '<script> alert("Tambah Data Berhasil"); </script>';
                      }else{
                        echo '<script> alert("Tambah Data Berhasil"); </script>';
                      }
                    }
                  ?>

                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Nama Kategori</label>
                      <select name="kategoriid" class="form-control" >
                        <?php
                          $kat = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
                          while($kategori = mysqli_fetch_array($kat)){
                            ?>
                            <option value="<?php echo $kategori['KategoriID']; ?>"> <?php echo $kategori['NamaKategori'] ?> </option>
                            <?php
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Judul</label>
                      <input type="text" class="form-control" name="judul" placeholder="Judul Buku . . . .">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Penulis</label>
                      <input type="text" class="form-control" name="penulis" placeholder="Penulis . . . .">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Penerbit</label>
                      <input type="text" class="form-control" name="penerbit" placeholder="Penerbit . . . .">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Tahun Terbit</label>
                      <input type="number" class="form-control" name="tahunterbit" placeholder="Tahun Terbit . . . .">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary mr-2">Reset</button>
                    <a href="?page=pages/page-buku/buku" class="btn btn-danger">Cancel</a>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>