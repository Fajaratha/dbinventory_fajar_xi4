<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <title>Data jenis</title>
    <title>Data barang</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">jenis</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Data barang</h1>
<a href="tambah.php">Tambah disini</a>
<table border="1" class="table table-dark table-striped">
    <tr>
        <th>No.</th>
        <th>id barang</th>
        <th>id jenis</th>
        <th>nama barang</th>
        <th>harga</th>
        <th>stok</th>
        <th>Aksi</th>
    </tr>
    <?php
    include '../../config/koneksi.php';
    $query = mysqli_query($conn,"SELECT * From barang");
    $no=1;
    if(mysqli_num_rows($query)){
        echo "Data Ada";
        while($result=mysqli_fetch_assoc($query)){
     ?>
     <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $result['id_barang'] ?></td>
        <td><?php echo $result['id_jenis'] ?></td>
        <td><?php echo $result['nama_barang'] ?></td>
        <td><?php echo $result['harga'] ?></td>
        <td><?php echo $result['stok'] ?></td>
        <td>
        <a href="view_edit.php?id_barang=<?php echo $result['id_barang']?>"
         onclick="return confirm ('yakin mau edit barang ?')" class="btn btn-warning"> <i class="fa-solid fa-pen-to-square"></i> edit |</a>
        <a href="hapus.php?id_barang=<?php echo $result['id_barang']?>"
         onclick="return confirm ('kamu yakin mau hapus barang ?')"
           class="btn btn-danger"><i class="fa-solid fa-trash"></i>hapus</a>
        </td>
     </tr>
     <?php
     $no++;
    }
}else{
    echo "data kosong";
}
?>
</table>
</body>
</html>