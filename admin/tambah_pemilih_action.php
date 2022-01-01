<?php
include '../connection.php';

function generate_token($len = 8){
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $token = substr( str_shuffle( $chars ), 0, $len );
    return $token;
}
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$angkatan = $_POST['angkatan'];
$status = 'Belum';
$token = generate_token();

mysqli_query($connection, "insert into data_pemilih values('','$nim','$nama','$token','$kelas','$angkatan', '$status')");

header("location:daftar-pemilih.php");
?> 