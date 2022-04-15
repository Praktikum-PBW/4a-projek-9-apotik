<?php
if (isset($_POST['tambah'])) {
    $kode = htmlentities(htmlspecialchars(strip_tags(trim($_POST['kd_obat']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_obat']))));
    $harga = htmlentities(htmlspecialchars(strip_tags(trim($_POST['harga']))));
    $kategori = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_kategori']))));
    $stok = htmlentities(htmlspecialchars(strip_tags(trim($_POST['stok']))));

    $query = mysqli_query($koneksi, "INSERT INTO obat VALUES(null,'$kode','$nama','$harga','$kategori','$stok')");

    if ($query) {
        header("Location: index.php?page=obat");
    } else {
        echo "Gagal";
    }
}
