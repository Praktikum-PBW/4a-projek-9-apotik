<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM obat WHERE id='$id'");

    if ($query) {
        header("Location: index.php?page=obat");
    } else {
        echo "Gagal";
    }
}
