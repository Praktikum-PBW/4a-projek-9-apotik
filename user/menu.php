<?php
if(isset($_GET['page'])){
    include '../lib/koneksi.php';
    $page = $_GET['page'];

    switch($page){
        case 'home':
            include 'home-user.php';
            break;
        default:
            echo"halaman tidak ditemukan";
            break;
    }
}else{
    include 'home-user.php';
}
?>