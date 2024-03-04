
<div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                    <h5>UBAH DATA</h5>
                  <form method="post">
                  <?php
                  $id = $_GET['id'];
                    if(isset($_POST['submit'])){
                      $buku_id = $_POST['bukuid'];
                      $user_id = $_SESSION['user']['UserID'];
                      $tanggal_peminjaman = $_POST['tanggalpeminjaman'];
                      $tanggal_pengembalian = $_POST['tanggalpengembalian'];
                      $status_peminjaman = $_POST['statuspeminjaman'];
                      $query = mysqli_query($koneksi, "UPDATE peminjaman set BukuID='$buku_id', tanggalpeminjaman='$tanggal_peminjaman', tanggalpengembalian='$tanggal_pengembalian', statuspeminjaman='$status_peminjaman' WHERE peminjamanid=$id");

                      if($query){
                        echo '<script> alert("Ubah Data Berhasil"); </script>';
                      }else{
                        echo '<script> alert("Ubah Data Berhasil"); </script>';
                      }
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman where PeminjamanID=$id");
                    $data = mysqli_fetch_array($query);
                  ?>

                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Buku</label>
                      <select name="bukuid" class="form-control">
                        <?php
                          $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                          while($buku = mysqli_fetch_array($buk)){
                            ?>
                            <option <?php if($buku['BukuID'] == $data['BukuID']) echo 'selected'; ?> value="<?php echo $buku['BukuID']; ?>"> <?php echo $buku['Judul']; ?> </option>
                            <?php
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Tanggal Peminjaman</label>
                      <input type="date" class="form-control" value="<?php echo $data['TanggalPeminjaman']; ?>" name="tanggalpeminjaman">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Tanggal Pengembalian</label>
                      <input type="date" class="form-control" value="<?php echo $data['TanggalPengembalian']; ?>" name="tanggalpengembalian">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1" class="text-sm opacity-8">Status Peminjaman</label>
                      <select name="statuspeminjaman" class="form-control">
                        <option value="dipinjam" <?php if($data['StatusPeminjaman'] == 'dipinjam') echo 'selected'; ?> >Dipinjam</option>
                        <option value="dikembalikan" <?php if($data['StatusPeminjaman'] == 'dikembalikan') echo 'selected'; ?> >Dikembalikan</option>
                      </select>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary mr-2">Reset</button>
                    <a href="?page=pages/page-peminjaman/peminjaman" class="btn btn-danger">Cancel</a>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>