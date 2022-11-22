<?php

require 'koneksi.php' ; 

$produk = mysqli_query($conn, "SELECT * FROM produk");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk Jual Beli Laptop </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="nav">
        <ul>
            <li><a href="user.php">User</a></li>
            <li class="prot"><a href="produk.php"><b>Produk</b></a></li>
            <li><a href="transaksi.php">Transaksi</a></li>
        </ul>
    </div>
    <h2>Data produk</h2>
    <h4><a href="tambahproduk.php">Tambah Data</a></h4>
    <table border="1" cellpadding="10px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama produk</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Stok</th>
            <th>Deksripsi</th>
            <th>Opsi</th>
        </tr>
 
        <?php $i = 1; ?>
        <?php foreach($produk as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama_produk"]; ?></td>
            <td><?= $data["harga"]; ?></td>
            <td><img src="img/<?= $data["foto"]; ?>" width="50px"></td>
            <td><?= $data["stok"]; ?></td>
            <td><?= $data["deskripsi"]; ?></td>
        <td>
            <a href="editproduk.php?id=<?= $data["id_produk"]; ?>">Edit</a>
            <a href="hapusproduk.php?id=<?= $data["id_produk"]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
        </td>
        </tr>
    <?php $i++; ?> 
    <?php endforeach; ?>
</table>
</body>
</html>     