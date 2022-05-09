
<section class="py-lg-2">
        <div class="container p-5">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card cardLog border-0 shadow rounded-3 my-5">
                  <div class="login card-body p-4 p-sm-5">
                    <h1 class="card-title text-center mb-5 fs-5"><strong>Tambah obat</strong></h1>
                    <hr class="w-25 mx-auto">
                    <form action="index.php?page=obat_store" method="post">
                        <div class="mb-2">
                            <label for="kd_obat" class="form-label">Kode obat</label>
                            <input type="text" name="kd_obat" id="kd_obat" class="form-control" placeholder="Masukkan kode obat" maxlength="6">
                        </div>
                        <div class="mb-2">
                            <label for="nama_obat" class="form-label">Nama obat</label>
                            <input type="text" name="nama_obat" id="nama_obat" class="form-control" placeholder="Masukkan nama obat">
                        </div>
                        <div class="mb-2">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan harga">
                        </div>
                        <div class="mb-2">
                            <label for="id_kategori" class="form-label">Nama Kategori obat</label>
                            <select name="id_kategori" id="id_kategori" class="form-select">
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM kategori_obat");
                                foreach ($query as $data) {
                                ?>
                                    <option value="<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="stok" class="form-label">Stok obat</label>
                            <input type="text" name="stok" id="stok" class="form-control" placeholder="Masukkan stok obat">
                        </div>
                        <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>      
    </section>