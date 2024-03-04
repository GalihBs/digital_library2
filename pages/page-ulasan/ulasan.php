<div class="row">
        <div class="col-12">
          <div class="card mb-4">
              <?php
                if($_SESSION['user']['Level'] == 'peminjam'){
              ?>
            <a href="?page=pages/page-ulasan/ulasan_tambah" class="btn btn-primary">Tambah Data</a>
            <?php
                }
                ?>
            <div class="card-header pb-2 opacity-8">
              <h6>Tabel Ulasan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-hover align-items-center text-center ">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">No</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Nama Peminjam</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Nama Buku</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Ulasan</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Rating</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM ulasanbuku LEFT JOIN user ON ulasanbuku.UserID = user.UserID LEFT JOIN buku ON ulasanbuku.BukuID = buku.BukuID") ;
                    while($data = mysqli_fetch_array($query)){
                      ?>
                    <tr>
                      <td class="align-middle text-center text-sm"><?php echo $i++; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['Username']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['Judul']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['Ulasan']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['Rating']; ?></td>
                
                      <?php
                        if(isset($_SESSION['user']['Level'])){
                      ?>

                      <td class="align-middle">
                        
                          <?php
                            $user = null;
                            if(isset($_SESSION['user']['UserID'])){
                              $user = $_SESSION['user']['UserID'];
                            }
                            if($data['UserID'] == $user){
                          ?>

                        <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="?page=pages/page-ulasan/ulasan_ubah&&id=<?php echo $data['UlasanID']; ?>">
                          <i class="fa fa-pencil me-2" aria-hidden="true" ></i>
                          Edit
                        </a>

                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" class="btn btn-link text-danger text-gradient px-3 mb-0" href="?page=pages/page-ulasan/ulasan_hapus&&id=<?php echo $data['UlasanID']; ?>">
                          <i class="fa fa-trash me-2" aria-hiddern="true" ></i>
                          Hapus
                        </a>

                        <?php
                          } if($_SESSION['user']['Level'] != 'peminjam'){
                        ?>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" class="btn btn-link text-danger text-gradient px-3 mb-0" href="?page=pages/page-ulasan/ulasan_hapus&&id=<?php echo $data['UlasanID']; ?>">
                          <i class="fa fa-trash me-2" aria-hiddern="true" ></i>
                          Hapus
                        </a>
                            <?php
                          }
                          ?>
                      </td>

                      <?php
                        }
                        ?>
                    </tr>
                    
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>