<?php
include '../connection.php';
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($connection, "delete from data_pemilih where id_pemilih='$id'");
header("location:daftar-pemilih.php");
?>