<?php
include '../connection.php';

$id = $_GET['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$visimisi = $_POST['visimisi'];
$progul = $_POST['progul'];
$foto = $_POST['foto'];

mysqli_query($connection, "update data_calon set nim='$nim', nama_calon='$nama', kelas='$kelas', foto='$foto', visimisi='$visimisi', progul='$progul' where id_calon='$id'");

header("location:daftar-calon.php");
?> 