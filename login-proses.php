<?php
if (isset($_POST['login'])) {
    session_start();

    include 'lib/koneksi.php';

    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $password = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));

    $password = sha1($password);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' && password='$password'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
        if ($data['status'] == "Admin") {
            $_SESSION['id'] = $data['id'];
            $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
            $_SESSION['status'] = $data['status'];
            header("location: admin/index.php");
        } else if ($data['status'] == "User") {
            $_SESSION['id'] = $data['id'];
            $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
            $_SESSION['status'] = $data['status'];
            header("location: user/index.php");
        }
    } else {
        $_SESSION['error'] = "Username atau password salah";
        header("Location:login.php");
    }
}