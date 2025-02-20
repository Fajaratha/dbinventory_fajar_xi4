<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah jenis Baru</h1>
    <form action="simpan.php" method="POST">
       <label for="">ID jenis</label> 
       <input type="number" name="id_jenis">
       <br>
       <label for="">Nama jenis</label>
       <input type="text" name="nama_jenis">
       <br>
       <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>