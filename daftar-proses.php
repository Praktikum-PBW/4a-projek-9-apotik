<?php
include 'lib/koneksi.php';
if (isset($_POST['daftar'])) {
    $nama = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = sha1($password);

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES(null,'$nama','$username','$password',default)");

    if ($query) {
        header("index.php?page=login");
    } else {
        echo "Gagal";
    }
}
