<?php
include 'connection.php';

session_start();
$voting = $_POST['voting'];
$tgl = date("Y-m-d");
$id_pemilih = $_SESSION['id_pemilih'];
$status = 'Sudah';

mysqli_query($connection, "insert into data_voting values('','$id_pemilih','$voting','$tgl')");
mysqli_query($connection, "update data_pemilih set status='$status' where id_pemilih='$id_pemilih'");

header("location:index.php");
?> 