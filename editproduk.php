<?php 
require 'koneksi.php';

$id = $_GET["id"];
$produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$id'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
</head>
<body>
    <h1>Edit Data Produk</h1>
    <form action="updateproduk.php" method="POST">
    <?php while($data = mysqli_fetch_array($produk)): ?>
        <input type="hidden" name="id_produk" value="<?= $data["id_produk"]; ?>

        <label for="nama_produk">Nama Produk</label><br />
        <input type="text" name="nama_produk" class="form-control" value="<?= $data["nama_produk"]; ?>"> 
        <br /><br />

        <label>Harga Produk</label><br />
        <input type="text" name="harga"  class="form-control" 
        value="<?= $data["harga"]; ?>">
        <br /><br />
 
        <label>Foto</label> <br />
        <input type="file" name="foto"  class="form-control" value="<?= $data["foto"]; ?>"> <br /><br />

        <label>Stok</label><br />
        <input type="text" name="stok"  class="form-control"
        value="<?= $data["stok"]; ?>">
        <br /><br />

        <label>Deskripsi</label><br />
        <input type="text" name="deskripsi" class="form-control" value="<?= $data["deskripsi"]; ?>"><br /><br />

        <button type="submit">Edit</button>
    </form>
    <?php endwhile ;?>
</body>
</html>
  