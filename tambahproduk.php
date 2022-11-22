<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH PRODUK</title>
</head>
<body>
    <form action="simpanproduk.php" method="POST" endctype="">
        <label for="nama_produk">nama</label>
        <input type="text" name="nama_produk" id="nama_produk"><br><br>

        <label for="harga">harga</label>
        <input type="text" name="harga" id="harga"><br><br>

        <label for="foto">foto</label>
        <input type="file" name="foto" id="foto"><br><br>

        <label for="stok">stok</label>
        <input type="text" name="stok" id="stok"><br><br>

        <label for="deskripsi">deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi"><br><br>

        <button type="submit">tambah</button>
    </form>
</body>
</html>