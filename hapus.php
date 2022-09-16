<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_pelanggan = $_GET['id_pelanggan'];
// query SQL untuk insert data
$sql = "DELETE from pelanggan where id_pelanggan='$id_pelanggan'";
$query = mysqli_query($connect, $sql);
// mengalihkan ke halaman tampilan.php
if($query){
    header('Location:tampilpelanggan.php');        
}else{
    header('Location:tampilpelanggan.php?status=gagal;');
}
?>