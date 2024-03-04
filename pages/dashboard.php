

<div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold" href="?page=pages/kategori">Total Kategori</a>
                    <h5 class="font-weight-bolder mb-0">
                      <?php
                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategoribuku"));
                      ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <a href="?page=pages/kategori">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold" href="?page=pages/buku">Total Buku</a>
                    <h5 class="font-weight-bolder mb-0">
                      <?php
                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku"));
                      ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <a href="?page=pages/buku">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                      <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold" href="?page=pages/ulasan">Total Ulasan</a>
                    <h5 class="font-weight-bolder mb-0">
                      <?php
                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasanbuku"));
                      ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <a href="?page=pages/ulasan">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                      <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3" >
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold" href="?page=pages/user">Total User</a>
                    <h5 class="font-weight-bolder mb-0">
                      <?php
                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));
                      ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <a href="?page=pages/user">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>