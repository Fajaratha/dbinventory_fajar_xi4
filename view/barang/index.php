<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Data barang</title>
</head>
<body>
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
            <a href="" class="btn btn-warning">edit |</a>
            <a href="" class="btn btn-danger">hapus</a>
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