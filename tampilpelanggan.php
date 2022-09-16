<?php
// memasukan file dari file koneksi.php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Data Pelanggan</h3>
    <h4><a href="pelanggan.html">[+] Tambah Baru</a></h4>
    <table border="1">
        <tr>
            <th>Id Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Telpon</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php
        // perintah mengambil data dari tabel PELANGGAN di mysql
            $sql = "SELECT * FROM pelanggan";
        //  (mysqli_query) Menjalankan perintah yg telah di ambil ($sql)
            $query = mysqli_query($connect,$sql);   
        //  (while) mengulang data (mysql_fetch_array)  pengambilan data MySQL menangkap data dari hasil perintah query dan membentuknya ke dalam array
            while($pel = mysqli_fetch_array($query)){
                // var_dump($pel);
                echo "
            <tr>
                <td>$pel[id_pelanggan]</td>
                <td>$pel[nama_pelanggan]</td>
                <td>$pel[alamat]</td>
                <td>$pel[telepon]</td>
                <td>$pel[email]</td>    
                </td>
                <td>
                    <a href='formedit.php?id_pelanggan=".$pel['id_pelanggan']."'>Edit</a> 
                    <a href='hapus.php?id_pelanggan=".$pel['id_pelanggan']."'>Hapus</a> 
                </td>
            </tr>"; 
            // $pel['id_pelanggan'] parameter
            }
                
        ?>
    </table>
</body>
</html>