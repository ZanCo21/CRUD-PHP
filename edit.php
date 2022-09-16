<?php
    include 'koneksi.php';
//(isset) memeriksa apakah suatu variabel sudah diatur atau belum. di simpan dengan method post
if(isset($_POST['editdata'])){
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
;

    $sql = "UPDATE pelanggan SET id_pelanggan='$id_pelanggan', nama_pelanggan='$nama_pelanggan', alamat='$alamat', telepon='$telepon', email='$email' WHERE id_pelanggan='$id_pelanggan' ";
// menjalankan perintah
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location:tampilpelanggan.php');        
    }else{
        header('Location:formedit.php?status=gagal;');
    }
}
?>