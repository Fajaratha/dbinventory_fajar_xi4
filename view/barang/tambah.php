<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Tambah barang Baru</h1>
    <form action="simpan.php" method="POST">
       <label for="">ID barang</label> 
       <input type="number" name="id_barang">
       <br>
       <label for="">ID jenis</label> 
       <input type="number" name="id_jenis">
       <br>
       <label for="">Nama barang</label>
       <input type="text" name="nama_barang">
       <br>
       <label for="">Harga</label>
       <input type="text" name="harga">
       <br>
       <label for="">Stok</label>
       <input type="text" name="stok">
       <br>
       <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>