<?php

require 'function.php' ; 

$user = mysqli_query($conn, "SELECT * FROM user");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="nav">
    <ul>
        <li><a href="user.php">User</a></li>
        <li class="prot"><a href="produk.php"><b>Produk</b></a></li>
        <li><a href="transaksi.php">Transaksi</a></li>
    </ul>
</div>
    <h2>Halaman User</h2>
    <table border="1" cellpadding="0" cellspacing="15">
        <tr>
            <th>No</th>
            <th>Nama lengkap</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
 
        <?php $i = 1; ?>
        <?php foreach($user as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama_lengkap"]; ?></td>
            <td><?= $data["username"]; ?></td>
            <td><?= $data["password"]; ?></td>
            <td><?= $data["roles"]; ?></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>