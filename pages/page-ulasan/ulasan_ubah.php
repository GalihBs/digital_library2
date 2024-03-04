
<div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                    <h5>Ubah Ulasan</h5>
                  <form method="post">
                  <?php
                  $id = $_GET['id'];
                    if(isset($_POST['submit'])){
                      $bukuid = $_POST['bukuid'];
                      $userid = $_SESSION['user']['UserID'];
                      $ulasan = $_POST['ulasan'];
                      $rating = $_POST['rating'];
                      $query = mysqli_query($koneksi, "UPDATE ulasanbuku SET bukuid='$bukuid', ulasan='$ulasan', rating='$rating' WHERE UlasanID=$id");

                      if($query){
                        echo '<script> alert("Tambah Data Berhasil"); </script>';
                      }else{
                        echo '<script> alert("Tambah Data Berhasil"); </script>';
                      }
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM ulasanbuku WHERE UlasanID = $id");
                    $data = mysqli_fetch_array($query);
                  ?>

                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Buku</label>
                      <select name="bukuid" class="form-control" >
                        <?php
                          $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                          while($kategori = mysqli_fetch_array($buk)){
                            ?>
                            <option <?php if($data['BukuID'] == ['BukuID']) echo 'selected' ?> value="<?php echo $kategori['BukuID']; ?>"> <?php echo $kategori['Judul'] ?> </option>
                            <?php
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Ulasan</label>
                      <textarea name="ulasan" class="form-control" rows="5"><?php echo$data['Ulasan']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Rating</label>
                      <select name="rating" class="form-control">
                        <?php
                          for($i = 1; $i <= 10; $i++){
                            ?>
                            <option <?php if($data['Rating'] == $i) echo 'selected' ?>> <?php echo $i; ?> </option>
                            <?php
                          }
                        ?>
                      </select>
                    </div>
                    
                    
                    
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary mr-2">Reset</button>
                    <a href="?page=pages/page-ulasan/ulasan" class="btn btn-danger">Cancel</a>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>