<?php
$conn = mysqli_connect('localhost','root','','dbinventory_fajar_xi4');

if(!$conn){
    die("Koneksi gagal".mysqli_connect_error());
}