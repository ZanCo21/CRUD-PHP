<?php
    include 'koneksi.php';
//(isset) memeriksa apakah suatu variabel sudah diatur atau belum. di simpan dengan method post
if(isset($_POST['simpan'])){
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    
    $sql = "INSERT INTO pelanggan(id_pelanggan, nama_pelanggan, alamat, telepon, email) VALUES('$id_pelanggan','$nama_pelanggan', '$alamat', '$telepon', '$email')";
// menjalankan
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilpelanggan.php');        
    }else{
        header('Location: simpan.php?status=gagal;');
    }
}
?>

<!-- auto increment -->