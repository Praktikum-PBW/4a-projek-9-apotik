<?php
if (isset($_GET['id_user'])) {
    $id = $_GET['id_user'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
        <div class="container p-5">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card cardLog border-0 shadow rounded-3 my-5">
                  <div class="login card-body p-4 p-sm-5">
                    <h1 class="card-title text-center mb-5 fs-5"><i class="bi bi-person-fill"></i><strong>EDIT USER</strong></h1>
                    <hr class="w-25 mx-auto">
                    <form action="index.php?page=update_user" method="post">
                        <input type="hidden" name="id_user" value="<?= $id ?>">
                        <div class="mb-2">
                            <label for="nama_lengkap" class="form-label">Nama</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukkan nama" value="<?= $data['nama_lengkap'] ?>">
                        </div>
                        <div class="mb-2">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" value="<?= $data['username'] ?>">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password">
                        </div>
                        <div class="mb-2">
                            <label for="status" class="form-label">status</label>
                            <select name="status" id="status" class="form-select">
                                <option value="Admin" <?php if ($data['status'] == "Admin") echo "selected" ?>>Admin</option>
                                <option value="Apoteker" <?php if ($data['status'] == "Apoteker") echo "selected" ?>>Apoteker</option>
                                <option value="User" <?php if ($data['status'] == "User") echo "selected" ?>>User</option>
                            </select>
                        </div>
                        <input type="submit" value="Edit" name="edit" class="btn btn-primary">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
    } else {
        header("Location:index.php?page=kategori");
    }
} else {
    header("Location:index.php?page=kategori");
}
?>