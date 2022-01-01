<?php
include '../connection.php';

// menghapus data dari database
mysqli_query($connection, "delete from data_pemilih");

header("location:data-voting.php");
?>