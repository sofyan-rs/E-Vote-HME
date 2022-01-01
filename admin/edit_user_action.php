<?php
include '../connection.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($connection, "update user set nama_user='$nama', username='$username', password='$password', email='$email' where id_user='$id'");

header("location:daftar-user.php");
?> 