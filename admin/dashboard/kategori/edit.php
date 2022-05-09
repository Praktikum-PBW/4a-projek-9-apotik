<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM kategori_obat WHERE id_kategori='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
        <section class="py-lg-2">
        <div class="container p-5">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card cardLog border-0 shadow rounded-3 my-5">
                  <div class="login card-body p-4 p-sm-5">
                    <h1 class="card-title text-center mb-5 fs-5"><strong>Edit Kategori</strong></h1>
                    <hr class="w-25 mx-auto">
                    <form action="index.php?page=kategori_update" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="mb-2">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" placeholder="Masukkan nama kategori" value="<?= $data['nama_kategori'] ?>">
                        </div>
                        <input type="submit" value="Edit" name="edit" class="btn btn-primary">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>      
    </section>
<?php
    } else {
        header("Location:index.php?page=kategori");
    }
} else {
    header("Location:index.php?page=kategori");
}
?>