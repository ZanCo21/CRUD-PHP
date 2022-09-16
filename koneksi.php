<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_penjualan";

    //  fungsi mysqli_connect untuk menjalankan variabel agar terkoneksi ke server mysql dan atau database.
    $connect = mysqli_connect($host,$user,$password,$database)or die ("GAGAL menghubung");
?>