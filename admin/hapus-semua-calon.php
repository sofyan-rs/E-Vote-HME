<?php
include '../connection.php';

// menghapus data dari database
mysqli_query($connection, "delete from data_calon");

header("location:daftar-calon.php");
?>