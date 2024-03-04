
<div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                    <h5>Tambah Ulasan</h5>
                  <form method="post">
                  <?php
                    if(isset($_POST['submit'])){
                      $bukuid = $_POST['bukuid'];
                      $userid = $_SESSION['user']['UserID'];
                      $ulasan = $_POST['ulasan'];
                      $rating = $_POST['rating'];
                      $query = mysqli_query($koneksi, "INSERT INTO ulasanbuku(bukuid, UserID, ulasan, rating) values('$bukuid','$userid','$ulasan','$rating')");

                      if($query){
                        echo '<script> alert("Tambah Data Berhasil"); </script>';
                      }else{
                        echo '<script> alert("Tambah Data Berhasil"); </script>';
                      }
                    }
                  ?>

                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Buku</label>
                      <select name="bukuid" class="form-control" >
                        <?php
                          $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                          while($kategori = mysqli_fetch_array($buk)){
                            ?>
                            <option value="<?php echo $kategori['BukuID']; ?>"> <?php echo $kategori['Judul'] ?> </option>
                            <?php
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Ulasan</label>
                      <textarea name="ulasan" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Rating</label>
                      <select name="rating" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
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