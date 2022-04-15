<?php
if(isset($_GET['page'])){
    include 'lib/koneksi.php';
    $page = $_GET['page'];

    switch($page){
        case 'login':
            include 'login.php';
            break;
        case 'dashboard':
            include 'admin/index.php';
            break;
        case 'daftar-akun':
            include 'daftar.php';
            break;
        case 'home':
            include 'home.php';
            break;
        case 'menu-ds':
            include 'admin/menu-ds.php';
            break;
        default:
            echo"halaman tidak ditemukan";
            break;
    }
}else{
    include 'home.php';
}
?>