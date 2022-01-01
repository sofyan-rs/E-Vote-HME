<?php
include '../connection.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$visimisi = $_POST['visimisi'];
$progul = $_POST['progul'];
$foto = $_POST['foto'];

mysqli_query($connection, "insert into data_calon values('','$nim','$nama','$kelas','$foto','$visimisi','$progul')");

header("location:daftar-calon.php");
?>