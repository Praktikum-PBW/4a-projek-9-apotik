<?php
if (isset($_GET['id_user'])) {
    $id = $_GET['id_user'];

    $query = mysqli_query($koneksi, "DELETE FROM `user` WHERE `user`.`id_user` = '$id'");

    if ($query) {
        header("Location: index.php?page=menu-ds");
    } else {
        echo "Gagal";
    }
}
