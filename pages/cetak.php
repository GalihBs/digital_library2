<h2 align="center">Laporan Peminjaman Buku</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
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
                  include "koneksi.php";
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
                <script>
                  window.print();
                  setTimeout(function() {
                    window.close();
                  }, 100);
                </script>  