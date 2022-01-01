<?php
session_start();
include "connection.php";

$nim = $_POST['login-nim'];
$token = $_POST['login-token'];

$login = mysqli_query($connection, "select * from data_pemilih where nim='$nim' and token='$token'");
$check = mysqli_num_rows($login);

if($check>0){
    $data = mysqli_fetch_assoc($login);
    $_SESSION['token'] = $token;
    $_SESSION['nama_pemilih'] = $data['nama_pemilih'];
    $_SESSION['id_pemilih'] = $data['id_pemilih'];
    $_SESSION['status2'] = "login";
    $_SESSION['statusz'] = $data['status'];
    header("location:index.php");
}
else {
    header("location:login.php/?pesan=gagal");
}
?>