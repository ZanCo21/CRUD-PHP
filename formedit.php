<?php
    include 'koneksi.php';

    $id_pelanggan = $_GET['id_pelanggan'];
    $sql = "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
    $query = mysqli_query($connect,$sql); 
    // (mysql_fetch_array/assoc)  pengambilan data MySQL menangkap data dari hasil perintah query
    $pel = mysqli_fetch_assoc($query);

    // jika data kurang dari 1 maka dia akan menampilkan die (data tidak ditemukan)
    if(mysqli_num_rows($query) < 1){
        die ("data tidak ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <form action="edit.php" method="post">
        <h3>Edit Data Pelanggan</h3>
        <p><label>Id pelanggan :<input required="required" type="number" disabled  name="id_pelanggan" value="<?php echo $pel['id_pelanggan']?>"></label></p>
        <p><label>Nama pelanggan <input required="required" type="text" name="nama_pelanggan" value="<?php echo $pel['nama_pelanggan']?>" ></label></p>
        <p><label>Alamat : <textarea name="alamat" cols="30" rows="5" ><?php echo $pel['alamat']?></textarea></label></p>
        <p><label>Telepon : <input required="required" type="number" name="telepon" value="<?php echo $pel['telepon']?>" ></label></p>
        <p><label>Email : <input required="required" type="text" name="email" value="<?php echo $pel['email']?>" ></label></p>

        <!-- type hidden ini berfungsi sebagai menyimpan data id mahasiswa yang sedang di edit-->
        <input type="hidden" name="id_pelanggan" value="<?php echo $pel['id_pelanggan']; ?>">
        <input type="submit" name="editdata" value="editdata">
    </form>
</body>
</html>

<!-- prim key ketika di edit harus di type=hidden or disable -->