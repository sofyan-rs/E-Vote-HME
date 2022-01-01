<?php
include '../connection.php';
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($connection, "delete from user where id_user='$id'");
header("location:daftar-user.php");
?>