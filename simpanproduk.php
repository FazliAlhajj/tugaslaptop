<?php

require 'koneksi.php';

$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];
$foto = $_POST["foto"];
$stok = $_POST["stok"];
$deskripsi = $_POST["deskripsi"];

$query = mysqli_query($conn ,"INSERT INTO produk VALUES(NULL, '$nama_produk','$harga','$foto','$stok','$deskripsi')");

if($query){
    echo'
        <script type="text/javascript">
            alert("data berhasil ditambahkan!");
            window.location = "produk.php";
        </script>  
    ';
}else{
    echo'
    <script type="text/javascript">
        alert("data gagal ditambahkan!");
        window.location = "tambahproduk.php";
    </script>  
    ';
}

?>