<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <a href="?page=pages/page-peminjaman/peminjaman_tambah" class="btn btn-primary">Tambah Data</a>
            <div class="card-header pb-2 opacity-8">
              <h6>Tabel Peminjaman</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-hover align-items-center text-center ">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">No</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Nama Peminjam</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Nama Buku</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Tanggal Dipinjam</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Tanggal Dikembalikan</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Status Peminjaman</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON peminjaman.UserID = user.UserID LEFT JOIN buku ON peminjaman.BukuID = buku.BukuID WHERE peminjaman.UserID=" . $_SESSION['user']['UserID']);
                    while($data = mysqli_fetch_array($query)){
                      ?>
                    <tr>
                      <td class="align-middle text-center text-sm"><?php echo $i++; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['Username']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['Judul']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['TanggalPeminjaman']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['TanggalPengembalian']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['StatusPeminjaman']; ?></td>
                
                      <td class="align-middle">
                        <?php
                          if($data['StatusPeminjaman'] != 'dikembalikan'){
                        ?>

                        <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="?page=pages/page-peminjaman/peminjaman_ubah&&id=<?php echo $data['PeminjamanID']; ?>">
                          <i class="fa fa-pencil me-2" aria-hidden="true" ></i>
                          Edit
                        </a>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" class="btn btn-link text-danger text-gradient px-3 mb-0" href="?page=pages/page-peminjaman/peminjaman_hapus&&id=<?php echo $data['PeminjamanID']; ?>">
                          <i class="fa fa-trash me-2" aria-hiddern="true" ></i>
                          Hapus
                        </a>

                        <?php
                          }
                          ?>
                      </td>
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