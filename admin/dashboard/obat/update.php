<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $kode = htmlentities(htmlspecialchars(strip_tags(trim($_POST['kd_obat']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_obat']))));
    $harga = htmlentities(htmlspecialchars(strip_tags(trim($_POST['harga']))));
    $kategori = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_kategori']))));
    $stok = htmlentities(htmlspecialchars(strip_tags(trim($_POST['stok']))));

    $query = mysqli_query($koneksi, "UPDATE obat SET kd_obat='$kode', nama_obat='$nama',harga='$harga',id_kategori='$kategori',stok='$stok' WHERE id='$id'");

    if ($query) {
        header("Location: index.php?page=obat");
    } else {
        echo "Gagal";
    }
}
