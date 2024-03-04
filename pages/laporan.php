<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <a href="pages/cetak.php" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Data</a>
            <div class="card-header pb-2 opacity-8">
              <h6>Laporan Peminjaman Buku</h6>
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
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON peminjaman.UserID = user.UserID LEFT JOIN buku ON peminjaman.BukuID = buku.BukuID ");
                    while($data = mysqli_fetch_array($query)){
                      ?>
                    <tr>
                      <td class="align-middle text-center text-sm"><?php echo $i++; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['Username']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['Judul']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['TanggalPeminjaman']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['TanggalPengembalian']; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['StatusPeminjaman']; ?></td>
                
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