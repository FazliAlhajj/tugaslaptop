<?php

require 'koneksi.php';

$id = $_POST["id_produk"];
$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];
$foto = $_POST["foto"];
$stok = $_POST["stok"];
$deskripsi = $_POST["deskripsi"];

$query = mysqli_query($conn ,"UPDATE produk SET
nama_produk = '$nama_produk',
harga = '$harga',
foto = '$foto',
stok = '$stok',
deskripsi = '$deskripsi' WHERE id_produk = '$id' ");

if($query){
    echo'
    <script type="text/javascript">
        alert("Data Berhasil diedit!");
        window.location = "produk.php";
    </script>
    ';
}
?>
