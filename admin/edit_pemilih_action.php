<?php
include '../connection.php';

$id = $_GET['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$angkatan = $_POST['angkatan'];

mysqli_query($connection, "update data_pemilih set nim='$nim', nama_pemilih='$nama', kelas='$kelas', angkatan='$angkatan' where id_pemilih='$id'");

header("location:daftar-pemilih.php");
?> 