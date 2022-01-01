<?php
include '../connection.php';
$id = $_GET['id'];
$id_pemilih = $_GET['id_pemilih'];
$status = 'Belum';

// menghapus data dari database
mysqli_query($connection, "delete from data_voting where id_voting='$id'");
mysqli_query($connection, "update data_pemilih set status='$status' where id_pemilih='$id_pemilih'");

header("location:data-voting.php");
?>