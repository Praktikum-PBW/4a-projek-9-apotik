<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mb-3">
            <h4>Data Kategori</h4>
            <a href="index.php?page=tambah_kategori" class="btn btn-primary">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM kategori_obat ORDER BY nama_kategori DESC");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                    foreach ($query as $data) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_kategori'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="index.php?page=edit_kategori&id=<?= $data['id_kategori'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="index.php?page=delete_kategori&id=<?= $data['id_kategori'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-danger">Tidak ada data...</div>
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