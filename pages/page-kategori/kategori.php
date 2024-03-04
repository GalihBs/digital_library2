
<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <a href="?page=pages/page-kategori/kategori_tambah" class="btn btn-primary">Tambah Data</a>
            <div class="card-header pb-2 opacity-8">
              <h6>Tabel Kategori</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-hover align-items-center text-center ">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">No</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Nama Kategori</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
                    while($data = mysqli_fetch_array($query)){
                      ?>
                    <tr>
                      <td class="align-middle text-center text-sm"><?php echo $i++; ?></td>
                      <td class="align-middle text-center text-sm"><?php echo $data['NamaKategori']; ?></td>
                
                      <td class="align-middle">
                        <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="?page=pages/page-kategori/kategori_ubah&&id=<?php echo $data['KategoriID']; ?>">
                          <i class="fa fa-pencil me-2" aria-hidden="true" ></i>
                          Edit
                        </a>
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="?page=pages/page-kategori/kategori_hapus&&id=<?php echo $data['KategoriID']; ?>">
                          <i class="fa fa-trash me-2" aria-hiddern="true" ></i>
                          Hapus
                        </a>
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