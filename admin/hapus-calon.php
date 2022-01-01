<?php
include '../connection.php';
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($connection, "delete from data_calon where id_calon='$id'");
header("location:daftar-calon.php");
?>